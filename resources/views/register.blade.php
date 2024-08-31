<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">

    <title>Register</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ url('assets/css/sleek.css') }}" />

    <!-- FAVICON -->
    <link href="{{ url('assets/img/favicon.png') }}" rel="shortcut icon" />

    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="{{ url('assets/plugins/nprogress/nprogress.js') }}"></script>
</head>

<body class="" id="body">
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="app-brand">
                            <a href="/index.html">
                                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                                    </g>
                                </svg>

                                <span class="brand-name">Merhaba Kebab</span>
                            </a>
                        </div>
                    </div>

                    <div class="card-body p-5">
                        <h4 class="text-dark mb-5">Register Account</h4>
                        @if (Session::has('message'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('message') }}
                            </div>
                        @endif

                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <input type="text" class="form-control" id="validationServerUsername"
                                        placeholder="Name" name="name" aria-describedby="inputGroupPrepend3" />

                                    @if ($errors->has('name'))
                                        <div style="color: red; margin-top: 2px">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                                <div class="form-group col-md-12 mb-4">
                                    <input type="email" class="form-control" id="validationServerUsername"
                                        placeholder="Email" name="email" aria-describedby="inputGroupPrepend3">
                                        @if ($errors->has('email'))
                                        <div style="color: red; margin-top: 2px">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>

                                <div class="form-group col-md-12 ">
                                    <input type="password" class="form-control" id="validationServerUsername"
                                        placeholder="Password" name="password" aria-describedby="inputGroupPrepend3">
                                        @if ($errors->has('password'))
                                        <div style="color: red; margin-top: 2px">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>

                                <div class="form-group col-md-12 ">
                                    <input type="password" name="password_confirmation" class="form-control"
                                        id="validationServerUsername" placeholder="Password" name="Konfirmasi Password"
                                        aria-describedby="inputGroupPrepend3">
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign
                                        Up</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <script type="module">
        import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

        const el = document.createElement('pwa-update');
        document.body.appendChild(el);
    </script> -->

    <!-- Javascript -->
    <script src="{{ url('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/js/sleek.js') }}"></script>
    <link href="{{ url('assets/options/optionswitch.css') }}" rel="stylesheet">
    <script src="{{ url('assets/options/optionswitcher.js') }}"></script>
</body>

</html>
