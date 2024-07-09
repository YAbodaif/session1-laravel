@extends('layouts/layout')

@section('title')
    Add Product
@endsection

@section('content')

@include ('inc.error')
<form class="row g-3" method="post" action="{{route('products_store')}}">
    @csrf
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="inputEmail4"> 
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Description</label>
    <input type="text" name="description" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Price</label>
    <input type="number" name="price"  class="form-control" id="inputAddress" >
  </div>
  
  <div class="col-md-4">
    <label for="inputState" class="form-label">Category</label>
    <select id="inputState" name="category" class="form-select">
    <!-- <option selected value="{{$cat->first()->category}}">{{$cat->first()->category}}</option> -->
    @foreach ($cat as $x )
    @if ($x->first)
    <option selected value="{{$x->category}}">{{$x->category}}</option>
    @else
    <option  value="{{$x->category}}">{{$x->category}}</option>
    @endif

    @endforeach
    
    </select>
  </div>
 
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</form>
@endsection