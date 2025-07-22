@extends('Product.layout')

@section('content')
    <div class="jumbotron container">
        <h1 class="display-4">Products!</h1>
        {{-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> --}}
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-success btn-lg" href="{{route('Products.create')}}" role="button">Create</a>
        <a class="btn btn-primary btn-lg" href="{{route('Products.trash')}}" role="button">Trash</a>
    </div>

    <div class="container">
        @if ($message = Session::get('success'))
        <div class="alert alert-primary" role="alert">
            {{$message}}
        </div>
        @endif
    </div>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col" style="width: 500px;">Actions</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i = 0;
                @endphp
            @foreach ($products as $product)
                <tr>
                <th scope="row">{{++ $i}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <a class="btn btn-success" href="{{ route('Products.edit',$product->id) }}">Edit</a>
                            </div>
                            <div class="col-sm">
                                <a class="btn btn-primary" href="{{route('Products.show',$product->id)}}">Show</a>
                            </div>
                            <div class="col-sm">
                                <a class="btn btn-warning" href="{{route('soft.delete',$product->id)}}">Soft Delete</a>
                            </div>
                            {{-- <div class="col-sm">
                                <form action="{{route('Products.destroy',$product->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"> Delete</button>
                                </form>
                            </div> --}}
                        </div>
                    </div>
                </td>
                </tr>
    
            @endforeach
            
            </tbody>
        </table>

       <div style="width: 200px;">
        
       </div>
    </div>
    {{-- {{ $products->render() }} --}}
@endsection