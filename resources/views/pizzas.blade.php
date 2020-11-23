    @extends('layout.layout')
    
    @section('content')
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
          <tr>
            <th>1</th>
            <td>Mark</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td><button class="btn btn-sm btn-success">Order Complete</button></td>
            <td><button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalLoginForm">Order Edit</button></td>
          </tr>
          
        </tbody>
      </table>
      <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
        </div>
    @endsection