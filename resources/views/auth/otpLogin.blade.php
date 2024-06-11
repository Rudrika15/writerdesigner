<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        input:-webkit-autofill {
            -webkit-box-shadow: 0 0 0px 1000px white inset !important;
            box-shadow: 0 0 0px 1000px white inset !important;

        }
    </style>
</head>

<body style="background: linear-gradient(70deg, #012e6f, #00b9f0);">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row p-5 justify-content-center">
                            {{-- <div class="col-lg-6 align-self-center d-none d-lg-block bg-login-image">
                                <img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="">
                            </div> --}}
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center pb-5">
                                        <img src="{{ asset('images/logo.png') }}" class="img-fluid w-50" alt="">
                                    </div>
                                    <form action="{{ route('otp.generate') }}" method="post">
                                        @csrf

                                        <div class="">
                                            <div class="">
                                                {{-- <img src="{{ asset('asset/img/logo.png') }}" alt="" style="height: 25%; width:25%;"> --}}

                                            </div>


                                            <div class="my-3">
                                                <label for="mobileno" class="form-label">Mobile Number</label>
                                                <input type="text" class="form-control shadow-none"
                                                    value="{{ old('mobileno') }}" id="mobileno" name="mobileno"
                                                    required autocomplete="mobileno" autofocus
                                                    placeholder="Enter Your Registered Mobile Number">
                                                {{-- <i class="fa fa-phone frm-ico"></i> --}}
                                                @error('mobileno')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="mx-2">
                                                <button type="submit" class="btn btn-sm mx-2"
                                                    style="background-color: #012e6f; color: white">
                                                    {{ __('Generate OTP') }}
                                                </button>
                                                <a class="mx-2" href="{{ route('login') }}">
                                                    {{ __('Login with password') }}
                                                </a>
                                            </div>

                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('otp.login') }}">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
