@extends('layouts/layout')

@section('title')
    Edit Product
@endsection

@section('content')

@include ('inc.error')

<form class="row g-3" method="post" action="{{route('products_update',$prod->id)}}">
    @csrf
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Title</label>
    <input type="text" value="{{old('title') ?? $prod->title}}" name="title" class="form-control" id="inputEmail4"> 
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Description</label>
    <input type="text" value="{{old('description') ?? $prod->description}}" name="description" class="form-control" id="inputEmail4"> 
  </div>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Price</label>
    <input type="text" value="{{old('price') ?? $prod->price}}" name="price" class="form-control" id="inputEmail4"> 
  </div>
  
  <div class="col-md-4">
    <label for="inputState" class="form-label">Category</label>
    <select id="inputState" name="category" class="form-select">
    <!-- <option selected value="{{$cat->first()->category}}">{{$cat->first()->category}}</option> -->
    @foreach ($cat as $x )
    @if ($x->first)
    <option selected value="{{old('category') ?? $prod->category}}">{{old('category') ?? $prod->category}}</option>
    @else
    <option  value="{{old('category') ?? $prod->category}}">{{old('category') ?? $prod->category}}</option>
    @endif

    @endforeach
    
    </select>
  </div>
 
  
  <div class="col-12">
    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{route('products_index')}}" class="btn btn-info">cancel</a>
  </div>
</form>
@endsection