@extends('layout.layout')
@section("content")
<div class="container">
  <h1 class="grey-text mt-4 d-inline">Order Pizza</h1>
  <img src="{{asset('image/pizza2.jpg')}}" alt="" width="200px" height="200px" class="img-responsive mt-4 ">
  @if(Session('success'))
  <div class="alert alert-success" role="alert">
    {{Session('success')}}
    </div>
    @endif

  <form class="text-center" action="{{route('insert')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="userName" class="form-label">User Name</label>
      <input type="text" class="form-control" id="userName" name="userName" placeholder="Enter User name">
      @error('userName')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="pizzaName" class="form-label">Pizza Name</label>
      <input type="text" class="form-control" id="pizzaName" name="pizzaName" placeholder="Enter pizza name">
      @error('pizzaName')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="topping" class="form-label">Topping</label>
      <input type="text" class="form-control" id="topping" name="topping" placeholder="Enter topping (e.g., mushrooms, pepperoni)">
      @error('topping')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="sauce" class="form-label">Sauce</label>
      <input type="text" class="form-control" id="sauce" name="sauce" placeholder="Enter sauce (e.g., tomato, BBQ)">
      @error('sauce')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="number" class="form-control" id="price" name="price" placeholder="Enter price in $">
      @error('price')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit Order</button>
  </form>
</div>

    @endsection
