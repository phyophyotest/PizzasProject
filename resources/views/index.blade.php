
@extends('layout.layout')
@section('content')
<div class="container mt-4">
    <h1 class="purple-text d-inline">Welcome To My Pizza Project</h1>
    <img src="{{asset('image/pizza1.png')}}" alt="" width="200" height="200" class="img-responsive">
    @if(Session('success'))
    <div class="alert alert-success">
      {{Session('success')}}
    </div>
    @endif
    <!-- Material form login -->
<div class="card">

    <h5 class="card-header purple mt-4 white-text text-center py-4">
      <strong>Pizza Order</strong>
    </h5>
  
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
  
      <!-- Form -->
      <form class="text-center" style="color: #757575;" action="{{route('insert')}}" method="post">
        @csrf
        <!-- User Name -->
        <div class="md-form">
            <input type="text" id="materialLoginFormEmail" class="form-control" name="username">
            <label for="materialLoginFormEmail">User Name</label>
           @error('username')
               <p class="text-danger">{{$message}}</p>
           @enderror
          </div>
        <!-- Pizza Name -->
        <div class="md-form">
          <input type="text" id="materialLoginFormEmail" class="form-control" name="pizza_name">
          <label for="materialLoginFormEmail">Pizza Name</label>
          @error('pizza_name')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <!-- Topping -->
        <div class="md-form">
            <input type="text" id="materialLoginFormEmail" class="form-control" name="topping">
            <label for="materialLoginFormEmail">Topping</label>
            @error('topping')
          <p class="text-danger">{{$message}}</p>
          @enderror
          </div>
          <!-- Sauce -->
        <div class="md-form">
            <input type="text" id="materialLoginFormEmail" class="form-control" name="sauce">
            <label for="materialLoginFormEmail">Sauce</label>
            @error('sauce')
          <p class="text-danger">{{$message}}</p>
          @enderror
          </div>
          <!-- Pirice -->
        <div class="md-form">
            <input type="text" id="materialLoginFormEmail" class="form-control" name="price">
            <label for="materialLoginFormEmail">Pirice</label>
            @error('price')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
  
  
        <!-- Sign in button -->
        <button class="btn purple white-text btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Order</button>
  
       
        <!-- Social login -->
        <p>or sign in with:</p>
        <a type="button" class="btn-floating btn-fb btn-sm">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a type="button" class="btn-floating btn-tw btn-sm">
          <i class="fab fa-twitter"></i>
        </a>
        <a type="button" class="btn-floating btn-li btn-sm">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a type="button" class="btn-floating btn-git btn-sm">
          <i class="fab fa-github"></i>
        </a>
  
      </form>
      <!-- Form -->
  
    </div>
  
  </div>
  <!-- Material form login -->

</div>


@endsection