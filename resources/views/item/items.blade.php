@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <h1 class="display-4">All Items</h1>
            </div>
            <a class="btn btn-success" href="{{route('item.create')}}">Create Item</a>
        </div>
    </div>
        <div class="row">
            @if ($items->count() > 0)
            @php
                $i = 1;
            @endphp
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Gallery</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            
                        @foreach ($items as $item)
                        <tr>
                            <th scope="row"> {{$i++}}</th>
                            <td> {{$item->name}}</td>
                            <td> {{$item->description}}</td>
                            <td> <img src="{{URL::asset($item->photo)}}" class="img-thumbnail" style="
                                width: 100px;
                                height: 100px;
                            "> </td>
                            <td> 
                                <ul>
                            @foreach ($item->media as $image)
                                <li><img src="{{URL::asset($image->photo)}}" class="img-thumbnail" style="
                                    width: 25px;
                                    height: 25px;
                                "></li>
                            @endforeach
                                </ul>
                            </td>
                            <td>
                                {{-- @if ($item->user_id == Auth::id()) --}}
                                    
                                    <a href="{{route('item.edit',['id'=>$item->id])}}"><i class="fa fa-pen-to-square"></i></a> &nbsp;
                                    <a class="text-danger" href="#" onclick="confirmDelete('{{ route('item.destroy', ['id' => $item->id]) }}');"><i class="fa fa-trash"></i></a>
                                {{-- @endif --}}
                            </td>
                        </tr>
                        @endforeach

                        
                    </tbody>
                </table>
            </div>
            @else
                <div class="col">
                    <div class="alert alert-info" role="alert">
                
                        No Items !
                    
                    </div>
                </div>
            @endif
                        
                    
            
        </div>
</div>

<script>
    function confirmDelete(deleteUrl) {
        if (confirm('Are you sure you want to delete this item?')) {
            window.location.href = deleteUrl;
        }
    }
</script>

@endsection