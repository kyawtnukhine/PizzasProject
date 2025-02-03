
@extends('layout.layout')  
@section("content")
<div class="continer">
{{-- <h1>{{$data}}</h1> --}}
{{-- <h1>{{ $pizza[2]['user_name'] }}</h1> --}}
@if(session('delete'))
<div class="alert alert-danger mt-3 mb-3" role="alert" >
  {{session('delete')}}
</div>
@endif
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id </th>
        <th scope="col">User Name </th>
        <th scope="col">Pizza Name</th>
        <th scope="col">Topping</th>
        <th scope="col">Sauce</th>
        <th scope="col">Price</th>
        <th scope="col">Edit Order</th>
        <th scope="col">Order Complete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($pizzas as $pizza)
      <tr>
        <td scope="row">{{$pizza['id']}}</td>
        <td scope="row">{{$pizza['user_name']}}</td>
        <td scope="row">{{$pizza['pizza_name']}}</td>
        <td scope="row">{{$pizza['topping']}}</td>
        <td scope="row">{{$pizza['Sauce']}}</td>
        <td scope="row">{{$pizza['price']}}$</td>
        <td><button class="btn tbn-sm btn-warning">Edit Order</button></td>
        <td><a class="btn btn-sm btn-success" href="{{ route('delete', $pizza->id) }}">Order Complete</a> </td>
      
      </tr>
      @endforeach
    </tbody>
  </table>
 </div>
@endsection