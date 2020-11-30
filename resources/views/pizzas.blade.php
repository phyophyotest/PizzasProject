    @extends('layout.layout')
    
    @section('content')
    @if (Session('delete'))
        <div class="alert alert-danger mt-3 mb-3">{{Session('delete')}}</div> 
    @endif
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">User Name</th>
            <th scope="col">Pizza Name</th>
            <th scope="col">Topping</th>
            <th scope="col">Sauce</th>
            <th scope="col">Price</th>
            <th scope="col">Order Complete</th>
            <th scope="col">Edit Order</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pizzas as $pizza)
            <tr>
              <th>{{$pizza['id']}}</th>
              <td>{{$pizza['username']}}</td>
              <td>{{$pizza['pizza_name']}}</td>
              <td>{{$pizza['topping']}}</td>
              <td>{{$pizza['sauce']}}</td>
              <td>{{$pizza['price']}}$</td>
              <td><a href="{{route("delete",$pizza->id)}}" class="btn btn-sm btn-success">Order Complete</a></td>
              <td><a href="{{route("edit",$pizza->id)}}" class="btn btn-sm btn-warning" >Order Edit</a></td> 
              {{-- data-toggle="modal" data-target="#modalLoginForm" --}}
            </tr>
          @endforeach
        </tbody>
      </table>
      {{-- <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold purple-text">Order</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <!-- User Name -->
                <div class="md-form">
                    <input type="text" id="materialLoginFormEmail" class="form-control">
                    <label for="materialLoginFormEmail">User Name</label>
                </div>
                <!-- Pizza Name -->
                <div class="md-form">
                <input type="text" id="materialLoginFormEmail" class="form-control">
                <label for="materialLoginFormEmail">Pizza Name</label>
                </div>
                <!-- Topping -->
                <div class="md-form">
                    <input type="text" id="materialLoginFormEmail" class="form-control">
                    <label for="materialLoginFormEmail">Topping</label>
                </div>
                <!-- Sauce -->
                <div class="md-form">
                    <input type="text" id="materialLoginFormEmail" class="form-control">
                    <label for="materialLoginFormEmail">Sauce</label>
                </div>
                <!-- Pirice -->
                <div class="md-form">
                    <input type="text" id="materialLoginFormEmail" class="form-control">
                    <label for="materialLoginFormEmail">Pirice</label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn purple white-text">Update</button>
            </div>
            </div>
        </div>
        </div> --}}
    @endsection