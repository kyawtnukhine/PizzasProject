
@extends('layout.layout')  
@section("content")
<div class="continer">
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
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>9.99$</td>
        <td><button class="btn tbn-sm btn-warning"  data-bs-toggle="modal" data-bs-target="#exampleModal">Edit Order</button></td>
        <td><button class="btn tbn-sm btn-success">Order Complete</button></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>@fat</td>
        <td>9.99$</td>
        <td><button class="btn tbn-sm btn-warning"  data-bs-toggle="modal" data-bs-target="#exampleModal">Edit Order</button></td>
        <td><button class="btn tbn-sm btn-success">Order Complete</button></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
        <td>@twitter</td>
        <td>9.99$</td>
        <td><button class="btn tbn-sm btn-warning"  data-bs-toggle="modal" data-bs-target="#exampleModal">Edit Order</button></td>
        <td><button class="btn tbn-sm btn-success">Order Complete</button></td>
      </tr>
    </tbody>
  </table>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sign in</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h1> Update Order Pizza</h1>
            <div class="mb-3">
              <label for="pizzaName" class="form-label">User Name</label>
              <input type="text" class="form-control" id="pizzaName" placeholder="Enter User name">
            </div>
          <div class="mb-3">
            <label for="pizzaName" class="form-label">Pizza Name</label>
            <input type="text" class="form-control" id="pizzaName" placeholder="Enter pizza name">
          </div>
          
          <div class="mb-3">
            <label for="topping" class="form-label">Topping</label>
            <input type="text" class="form-control" id="topping" placeholder="Enter topping (e.g., mushrooms, pepperoni)">
          </div>
          
          <div class="mb-3">
            <label for="sauce" class="form-label">Sauce</label>
            <select class="form-control" id="sauce">
              <option value="tomato">Tomato</option>
              <option value="alfredo">Alfredo</option>
              <option value="pesto">Pesto</option>
            </select>
          </div>
          
          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" placeholder="Enter price in $">
          </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
  </div>
 </div>
@endsection