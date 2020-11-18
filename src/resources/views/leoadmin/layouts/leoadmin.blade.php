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
    
    <body class="fixed-aside">

        <div class="app" id="app">

            <!-- ############ LAYOUT START-->
            <div id="aside" class="app-aside fade box-shadow-x nav-expand white" aria-hidden="true">

                <div class="sidenav modal-dialog dk white">
                    
                    <!-- sidenav top -->
                    <div class="navbar lt">
                        
                        <!-- brand -->
                        <a href="{{ url('/') }}" class="navbar-brand">
                            <span class="hidden-folded d-inline">LeoAdmin</span>
                        </a>
                        <!-- / brand -->
                        
                    </div>
                    
                    <!-- Flex nav content -->
                    <div class="flex hide-scroll">
                        <div class="scroll">
                            <div class="nav-border b-primary" data-nav>
                                
                                <ul class="nav">
                                    
                                    @foreach(config('leoadmin.sidebar') as $key => $sidebar)

                                        @if(empty($sidebar['can']) || auth()->user()->hasAnyPermission($sidebar['can']))
                                            <li class="nav-header hidden-folded mt-2">
                                                <span class="text-xs">{{ $sidebar['header'] }}</span>
                                            </li>
                                        @endif

                                        @foreach($sidebar['menu'] as $key => $menu)

                                            @if(empty($menu['can']) || auth()->user()->hasAnyPermission($menu['can']))
                                                <li>
                                                    <a href="{{ $menu['url'] }}">
                                                        <span class="nav-icon"><i class="{{ $menu['icon'] }}"></i></span>
                                                        <span class="nav-text">{{ $menu['title'] }}</span>
                                                    </a>
                                                </li>
                                            @endif

                                        @endforeach
                
                                    @endforeach

                                </ul>

                            </div>
                        </div>
                    </div>
                    
                    <!-- sidenav bottom -->
                    <div class="no-shrink lt">
                        <div class="nav-fold">
                            <div class="hidden-folded flex p-2-3 bg">
                                <div class="d-flex p-1">
                                    
                                    <a href="app.inbox.html" class="flex text-nowrap">
                                        <i class="fa fa-money text-muted mr-1"></i>
                                        <span class="badge badge-pill theme mr-1">Tag</span>
                                    </a>
                                    
                                    <a href="lockme.html" class="px-2" data-toggle="tooltip" title="تسجيل الخروج">
                                        <i class="fa fa-power-off text-muted"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>

            <!-- ############ Content START-->
            <div id="content" class="app-content box-shadow-0" role="main">
                <!-- Header -->
                <div class="content-header white  box-shadow-0" id="content-header">
                    <div class="navbar navbar-expand-lg">
                        <!-- btn to toggle sidenav on small screen -->
                        <a class="d-lg-none mx-2" data-toggle="modal" data-target="#aside">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                                <path d="M80 304h352v16H80zM80 248h352v16H80zM80 192h352v16H80z" />
                            </svg>
                        </a>
                        <!-- Page title -->
                        <div class="navbar-text nav-title flex" id="pageTitle">
                        </div>
                        <ul class="nav flex-row order-lg-2">


                        </ul>

                    </div>
                </div>
                <!-- Main -->
                <div class="content-main" id="content-main">
                    <div class="padding">

                        @if(session()->has('success-message'))
                            <div class="box-color success pos-rlt">
                                <span class="arrow right b-info"></span>
                                <div class="box-body">
                                    {{ session()->get('success-message') }}
                                </div>
                            </div>
                        @endif

                        @yield('content')
                    </div>
                </div>
                <!-- Footer -->
                <div class="content-footer white " id="content-footer">
                    <div class="d-flex p-3">
                        <span class="text-sm text-muted flex">
                            <a class="font-w600" href="#">LeoAdmin</a> &copy; {{ date('Y') }}
                        </span>
                    </div>
                </div>
            </div>
            <!-- ############ Content END-->
            <!-- ############ LAYOUT END-->
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