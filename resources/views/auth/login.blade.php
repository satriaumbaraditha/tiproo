@extends('layouts.applogin')

@section('content')
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="exampleInputEmail1">Email address</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="exampleInputPassword1">Password</label>
            <input id="password" type="password" class="form-control" name="password" required>
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
                                          <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="/register">Register an Account</a>
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
