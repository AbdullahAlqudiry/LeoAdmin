<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>LeoAdmin</title>
        
        <meta name="description" content="Responsive, Bootstrap, BS4" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- for ios 7 style, multi-resolution icon of 152x152 -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
        <link rel="apple-touch-icon" href="{{ url('assets/images/logo.svg') }}">
        <meta name="apple-mobile-web-app-title" content="Flatkit">

        <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="shortcut icon" sizes="196x196" href="{{ url('assets/images/logo.svg') }}">

        <!-- style -->
        <link rel="stylesheet" href="{{ url('assets/libs/font-awesome/css/font-awesome.min.css') }}" type="text/css" />
                
        <!-- build:css assets/css/app.min.css -->
        <link rel="stylesheet" href="{{ url('assets/libs/bootstrap/dist/css/bootstrap.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('assets/css/app.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('assets/css/theme/primary.css') }}" type="text/css" />
        <!-- endbuild -->

        <link href="{{ url('assets/css/app.rtl.css') }}" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    </head>

    <body class="fixed-aside">
        
        <div class="d-flex flex-column flex">

            <div class="navbar light bg pos-rlt box-shadow">
                <div class="mx-auto">
                    <!-- brand -->
                    <a href="{{ url('/') }}" class="navbar-brand">
                        <span class="hidden-folded d-inline">LeoAdmin</span>
                    </a>
                    <!-- / brand -->
                </div>
            </div>

            <div id="content-body">
                @yield('content')
            </div>
        </div>


        <!-- build:js assets/js/app.min.js -->
        <!-- jQuery -->
        <script src="{{ url('assets/libs/jquery/dist/jquery.min.js') }}"></script>

        <!-- Bootstrap -->
        <script src="{{ url('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ url('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>

        <!-- core -->
        <script src="{{ url('assets/libs/pace-progress/pace.min.js') }}"></script>
        <script src="{{ url('assets/libs/pjax/pjax.min.js') }}"></script>
        <script src="{{ url('assets/js/lazyload.config.js') }}"></script>
        <script src="{{ url('assets/js/lazyload.js') }}"></script>
        <script src="{{ url('assets/js/plugin.js') }}"></script>
        <script src="{{ url('assets/js/nav.js') }}"></script>
        <script src="{{ url('assets/js/scrollto.js') }}"></script>
        <script src="{{ url('assets/js/toggleclass.js') }}"></script>
        <script src="{{ url('assets/js/theme.js') }}"></script>
        <script src="{{ url('assets/js/app.js') }}"></script>
        <!-- endbuild -->

        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.select2').select2();
            });
        </script>
    </body>
</html>