<!-- register.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> ガレリ | {{$title}}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{url('AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('AdminLTE-3.2.0/dist/css/adminlte.min.css')}}">
</head>
    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Register a new membership</p>
                    <form class="user" action="{{route('register.store')}}" method="post">
                        @csrf

                        <div class="form-group">
                            <input type="email"
                                class="form-control form-control-user @error('email')is-invalid @enderror" name="email"
                                id="email" placeholder="Email" required value="{{old('email')}}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text"
                                class="form-control form-control-user @error('username')is-invalid @enderror"
                                name="username" id="username" placeholder="Username" required
                                value="{{old('username')}}">
                            @error('username')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text"
                                class="form-control form-control-user @error('namalengkap')is-invalid @enderror"
                                name="namalengkap" id="namalengkap" placeholder="Full Name" required
                                value="{{old('namalengkap')}}">
                            @error('namalengkap')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text"
                                class="form-control form-control-user @error('alamat')is-invalid @enderror"
                                name="alamat" id="alamat" placeholder="Address" required value="{{old('alamat')}}">
                            @error('alamat')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password"
                                class="form-control form-control-user @error('password')is-invalid @enderror"
                                name="password" id="password" placeholder="Password" required
                                value="{{old('password')}}">
                            @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <button href="" class="btn btn-primary btn-user btn-block" type="submit">
                            Register Account
                        </button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="/login">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

        </div>
        <!-- Bootstrap core JavaScript-->
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>


    </body>

</html>
