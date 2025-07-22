<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item as Item;
use App\Models\Media as Media;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('auth')->only(['items','create','store','edit','update','destroy']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('welcome',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'photo' => 'required|image',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $photo = $request->photo;
        //to change name of photo
        $newPhoto = time().$photo->getClientOriginalName();
        $photo->move('uploads/items',$newPhoto);

        
        $item = Item::create([
            'name'=> $request->name,
            'description'=> $request->description,
            'photo'=>  'uploads/items/'.$newPhoto,
        ]);

        if($item){
            foreach($request->images as $image){
                $image_name = time().$image->getClientOriginalName();
                $image->move('uploads/media',$image_name);

                $media = Media::create([
                    'photo'=> 'uploads/media/'.$image_name,
                    'item_id'=> $item->id,
                    
                ]);

            }
        }
        
        return  redirect()->back();
    }

    /**
     * Display the specified resource.
     * v1 remove show
     */
    public function items()
    {
        $items = Item::all();
        return view('item.items',compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $item =Item::where('id',$id)->first(); 
        
        if ($item === null) {
            return  redirect()->back();
        }
        return view('item.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Item::find($id);
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'photo' => 'image',
            'images' => 'array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if($request->has('photo')){
            $photo = $request->photo;
            //to change name of photo
            $newPhoto = time().$photo->getClientOriginalName();
            $photo->move('uploads/items',$newPhoto);
            $imagePath =$item->photo; 
            $item->photo ='uploads/items/'.$newPhoto;
        }
        
        
        $item->name = $request->name;
        $item->description = $request->description;
        if($item->save()){
            if ($request->has('photo') && file_exists($imagePath)) {
                if (unlink($imagePath)) {
                    // Image deleted successfully
                }
            }

            //check if has gallery images set
            if($request->has('images')){
                //delete old image gallery
                foreach($item->media as $oldImage){
                    if (file_exists($oldImage->photo)) {
                        if (unlink($oldImage->photo)) {
                            // Image deleted successfully
                        }
                    }
                }
                //add new image gallery
                foreach($request->images as $image){
                    $image_name = time().$image->getClientOriginalName();
                    $image->move('uploads/media',$image_name);
    
                    $media = Media::create([
                        'photo'=> 'uploads/media/'.$image_name,
                        'item_id'=> $item->id,
                        
                    ]);
    
                }
                


            }
        }

        return  redirect()->back();
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Item::find($id);
        $imagePath =$item->photo;
        $galleryImage  =$item->media;
        if($item->delete()){
            if (file_exists($imagePath)) {
                if (unlink($imagePath)) {
                    // Image deleted successfully
                }
            }

            foreach($galleryImage as $oldImage){
                if (file_exists($oldImage->photo)) {
                    if (unlink($oldImage->photo)) {
                        // Image deleted successfully
                    }
                }
            }

        }
        
        return redirect()->back();
    }
}
