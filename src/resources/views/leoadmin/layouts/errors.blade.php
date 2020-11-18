<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>@yield('errorCode') | @yield('errorMessage')</title>
        
        <meta name="description" content="Responsive, Bootstrap, BS4" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- for ios 7 style, multi-resolution icon of 152x152 -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
        <link rel="apple-touch-icon" href="{{ url('leoadmin/assets/images/logo.svg') }}">
        <meta name="apple-mobile-web-app-title" content="Flatkit">

        <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="shortcut icon" sizes="196x196" href="{{ url('leoadmin/assets/images/logo.svg') }}">

        <!-- style -->
        <link rel="stylesheet" href="{{ url('leoadmin/assets/libs/font-awesome/css/font-awesome.min.css') }}" type="text/css" />
                
        <!-- build:css leoadmin/assets/css/app.min.css -->
        <link rel="stylesheet" href="{{ url('leoadmin/assets/libs/bootstrap/dist/css/bootstrap.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('leoadmin/assets/css/app.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('leoadmin/assets/css/style.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('leoadmin/assets/css/theme/primary.css') }}" type="text/css" />
        <!-- endbuild -->

        <link href="{{ url('leoadmin/assets/css/app.rtl.css') }}" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    </head>

    <body>

        <div class="d-flex flex align-items-center h-v">
            <div class="text-center p-5 w-100">

                <h2 class="display-5 my-5">@yield('errorMessage')</h2>
                
                <p>
                    الرجوع الى 
                    <a href="{{ url('/') }}" class="b-b b-white">الصفحة الرئيسية</a>
                </p>
                    <p class="my-5 text-muted h4">
                        -- @yield('errorCode') --
                    </p>
            </div>
        </div>


        <!-- build:js leoadmin/assets/js/app.min.js -->
        <!-- jQuery -->
        <script src="{{ url('leoadmin/assets/libs/jquery/dist/jquery.min.js') }}"></script>

        <!-- Bootstrap -->
        <script src="{{ url('leoadmin/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ url('leoadmin/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>

        <!-- core -->
        <script src="{{ url('leoadmin/assets/libs/pace-progress/pace.min.js') }}"></script>
        <script src="{{ url('leoadmin/assets/libs/pjax/pjax.min.js') }}"></script>
        <script src="{{ url('leoadmin/assets/js/lazyload.config.js') }}"></script>
        <script src="{{ url('leoadmin/assets/js/lazyload.js') }}"></script>
        <script src="{{ url('leoadmin/assets/js/plugin.js') }}"></script>
        <script src="{{ url('leoadmin/assets/js/nav.js') }}"></script>
        <script src="{{ url('leoadmin/assets/js/scrollto.js') }}"></script>
        <script src="{{ url('leoadmin/assets/js/toggleclass.js') }}"></script>
        <script src="{{ url('leoadmin/assets/js/theme.js') }}"></script>
        <script src="{{ url('leoadmin/assets/js/app.js') }}"></script>
        <!-- endbuild -->

        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.select2').select2();
            });
        </script>

    </body>
</html>