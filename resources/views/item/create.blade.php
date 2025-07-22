@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <h1 class="display-4">Create Item</h1>
            </div>
            <br>
            <a class="btn btn-success" href="{{route('item.items')}}" style="margin-bottom: 20px">All Items</a>
            <br>
        </div>
    </div>
    <div class="row">
        @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
        <div class="col">
            <form action="{{route('item.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group row">
                    <label class="col-md-1">Title</label>
                    <div class="col-md-11"><input type="text" name="name" class="form-control" placeholder="Please Enter Title of Item" ></div>
                    
                </div>

                <br>

                <div class="form-group row">
                    <label class="col-md-1" >Description</label>
                    <div class="col-md-11"><textarea class="form-control" name="description" rows="3" placeholder="Please Enter Description of Item"></textarea></div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-md-1">Photo</label>
                    <div class="col-md-11"><input type="file" name="photo" class="form-control"  ></div>
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-md-1">Gallery</label>
                    <div class="col-md-11"><input type="file" name="images[]" accept="image/*"  class="form-control" multiple></div>
                </div>
                <br>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-danger">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection