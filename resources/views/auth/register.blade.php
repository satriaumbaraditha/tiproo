@extends('layouts.applogin')

@section('content')
<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
         {{ csrf_field() }}
          <div class="form-group">
            <label for="name">Full Name</label>
            <input class="form-control" id="name" name="name" type="name" aria-describedby="name" placeholder="Enter Full Name">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input class="form-control" id="email" name="email" type="email" aria-describedby="email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="password">Password</label>
                <input class="form-control" id="password" name="password" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="password-confirm">Confirm password</label>
                <input class="form-control" id="password-confirm" name="password_confirmation" type="password" placeholder="Confirm password">
              </div>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">
            Register
          </button>
          
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="/login">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
@endsection
