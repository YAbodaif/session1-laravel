@extends ('Layouts/layout')

@section('title')
    {{$prod->title}}
@endsection
@section('content')
    <h2>{{$prod->title}} Details</h2>
    <hr>
<div class="row">
    <div class="col-4">
        <h5>Id : {{$prod->id}}</h5><br>
        <h5>Title : {{$prod->title}}</h5><br>
        <h5>Descreption : {{$prod->description}}</h5><br>
        <h5>Category : {{$prod->category}}</h5><br>
        <h5>Quantity : {{$prod->quantity}}</h5><br>
        <h5>Price : {{$prod->price}}</h5><br>
    </div>
    <div class="col-8">
    <img src="../../uploads/products/{{$prod->img}}" class="w-100" alt="{{$prod->title}}">
    </div>
</div>
   
    <hr>
    <a class="btn btn-primary" href="{{route('products_index')}}">Back</a>
@endsection
