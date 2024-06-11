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
                                    <form action="{{ route('register') }}" method="post">
                                        @csrf

                                        <div class="mb-3">
                                            <input class="form-control" type="name" placeholder="Name"
                                                value="{{ old('name') }}" id="name" name="name">
                                            @error('name')
                                                <span role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                        <div class="mb-3">
                                            <input type="email" class="form-control" placeholder="Email"
                                                value="{{ old('email') }}" id="email" name="email">
                                            @error('email')
                                                <span role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <input type="text" class="form-control"
                                                placeholder="Create Your Unique Username" value="{{ old('username') }}"
                                                id="username" name="username">
                                            @error('username')
                                                <span role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <?php
                    session_start();
                    if (isset($_SESSION['mobileno'])) {
                        $mobileno = $_SESSION['mobileno'];
                    ?>

                                        <div class="mb-3"><input type="text" class="form-control"
                                                placeholder="Enter your Phone number" readonly
                                                value="{{ $mobileno }}" id="mobileno" name="mobileno">
                                            @error('mobileno')
                                                <span role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <?php
                    } else {
                        $mobileno = "";
                    ?>
                                        <div class="mb-3"><input type="text" class="form-control"
                                                placeholder="Enter your Phone number" value="{{ $mobileno }}"
                                                id="mobileno" name="mobileno">
                                            @error('mobileno')
                                                <span role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <?php
                    }
                    ?>

                                        <div class="mb-3"><input type="password" class="form-control"
                                                placeholder="Password" name="password">
                                            @error('password')
                                                <span role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3"><input type="password" class="form-control"
                                                placeholder="Confirm Password" class="" id="password_confirmation"
                                                name="confirm-password"></div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <label><input type="radio" class="" id=""
                                                        name="type" value="Individual">Individual</label>
                                                <label><input type="radio" class="" id=""
                                                        name="type" value="Business">Business</label>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="mb-3 Business box" style="display: none;">
                                            <select name="category" id="category" class="form-control">
                                                <option selected disabled>Select Category</option>
                                                @foreach ($categories as $data)
                                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                @endforeach
                                                <option value="other">Other</option>
                                            </select>
                                            @error('category')
                                                <span role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                        <div class="mb-3" id="other" style="display: none;">
                                            <input type="text" class="form-control"
                                                placeholder="Add Other Category" name="categoryname" class="">
                                        </div>

                                        <div class="mb-3">
                                            <input type="text" class="form-control"
                                                placeholder="Do you have Refer Code??" class="" id="refer"
                                                name="refer">
                                        </div>



                                        <button type="submit" class="btn"
                                            style="background-color: #012e6f; color: white; margin-left: 310px;">Register
                                        </button>


                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="" href="{{ route('otp.login') }}">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="" href="{{ route('login') }}">Already Registered?</a>
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
    <script>
        $(document).ready(function() {
            $('#category').on('change', function() {
                if (this.value == 'other') {
                    $("#other").show();
                } else {
                    $("#other").hide();
                }
            });
        });
    </script>

    <!-- user type hide and show code -->
    <script>
        $(document).ready(function() {
            $('input[type="radio"]').click(function() {
                var inputValue = $(this).attr("value");
                var targetBox = $("." + inputValue);
                $(".box").not(targetBox).hide();
                $(targetBox).show();
            });
        });
    </script>

    {{-- <script src="{{ asset('js/scripts.js') }}"></script> --}}
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
