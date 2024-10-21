<!doctype html>
<html lang="tr">

    <head>

        <meta charset="utf-8" />
        <title>Admin | Giriş</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/') }}/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('backend/') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend/') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('backend/') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">

                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="index.html" class="auth-logo">
                                    <img src="{{ asset('backend/') }}/assets/images/logo-dark.png" height="30" class="logo-dark mx-auto" alt="">
                                    <img src="{{ asset('backend/') }}/assets/images/logo-light.png" height="30" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>

                        <h4 class="text-muted text-center font-size-18"><b>Giriş Yapın</b></h4>

                        <div class="p-3">

                            <form class="form-horizontal mt-3" method="POST" action="{{ route('login') }}">
                                    @csrf
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="email" type="email" name="email" required="" placeholder="e-Posta">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="password" type="password" name="password" required="" placeholder="Şifre">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>
<!--
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="form-label ms-1" for="customCheck1">Beni Hatırla</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                    -->

                                <div class="form-group mb-3 text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Giriş</button>
                                    </div>
                                </div>

                                <div class="form-group mb-0 row mt-2">
                                    <div class="col-sm-7 mt-3">
                                        <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock"></i> Şifremi Unuttum</a>
                                    </div>
                                    <div class="col-sm-5 mt-3">
                                        <a href="{{ route('register') }}" class="text-muted"><i class="mdi mdi-account-circle"></i> Bir hesap oluşturun</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end -->
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend/') }}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('backend/') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('backend/') }}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('backend/') }}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('backend/') }}/assets/libs/node-waves/waves.min.js"></script>

        <script src="{{ asset('backend/') }}/assets/js/app.js"></script>

    </body>
</html>