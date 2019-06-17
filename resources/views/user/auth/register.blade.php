<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/backend_images/favicon.png') }}">

    <title>{{ config('app.name', 'CUSTOMERS WAY') }}</title>

    <!-- Custom CSS -->
    <link href="{{ asset('css/backend_css/style.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div>
                    <div class="text-center p-t-20 p-b-20">
                         <span class="db"><img src="{{ asset('img/logos.png') }}" alt="logo" /></span>
                    </div>
                    <!-- Form -->
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/user/register') }}">
                        {{ csrf_field() }}
    
                <div class="row p-b-30">
                    <div class="col-12">

                        <div class="input-group mb-3 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                            </div>
                            <input id="name" type="text" class="form-control form-control-lg" placeholder="Name" aria-label="Username" name="name" aria-describedby="basic-addon1" value="{{ old('name') }}" autofocus required>
    
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>


                        <div class="input-group mb-3 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                            </div>
                            <input id="email" type="email" class="form-control form-control-lg" placeholder="Email Address" name="email" value="{{ old('email') }}" aria-label="Username" aria-describedby="basic-addon1" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="input-group mb-3 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                            </div>
                            <input id="password" type="password" class="form-control form-control-lg" placeholder="Password" name="password" aria-label="Password" aria-describedby="basic-addon1" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="input-group mb-3 form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                            </div>
                            <input id="password-confirm" type="password" class="form-control form-control-lg" placeholder=" Confirm Password" name="password_confirmation" aria-label="Password" aria-describedby="basic-addon1" required>

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row border-top border-secondary">
                    <div class="col-12">
                        <div class="form-group">
                            <div class="p-t-20">
                                <button class="btn btn-block btn-lg btn-info" type="submit">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>

    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/backend_assets/libs/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/backend_assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>

    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $('#to-login').click(function(){

        $("#recoverform").hide();
        $("#loginform").fadeIn();
    });
    </script>

</body>

</html>
