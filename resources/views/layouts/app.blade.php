<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js')}}"></script>
    <!-- Fonts -->
   {{-- <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">--}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{ asset('css/luna_style.css') }}" rel="stylesheet">

</head>
<body>
            <div class="shop-supmenu">
                <div class="row flex-nowrap justify-content-between align-items-center top">
                    <div class="pt-1 ml-4">
                        <span>{{ trans('pages.language') }}:</span>
                        <a href="setlocale/ru">
                            RU
                        </a>
                        <a href="setlocale/en">
                            EN
                        </a>
                    </div>
                    <div class="mr-4 justify-content-end align-items-center text-muted">
                        <a href="#">
                            {{ trans('pages.login') }}
                        </a>
                        <a href="#">
                            {{ trans('pages.checkin') }}
                        </a>
                    </div>
                </div>
            </div>
            <header class="sticky-top z-index-1">
                <div class="shop-header">
                    <div class="row flex-nowrap justify-content-between align-items-center">
                        {{--<div class="col-4 pt-3 text-muted top">
                            <a id="company" href="#">О компании</a>
                            <a id="shops" href="#">Магазины</a>
                        </div>--}}
                        <div class="col-4 d-flex">
                            <form class="form-inline ml-2">
                                <i class="fas fa-search mr-2" aria-hidden="true"></i>
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            </form>
                        </div>
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            <a class="shop-header__logo" href="#"><img src="{{ asset('img/logo.png') }}" alt="logo"></a>
                        </div>
                        <div class="col-4 d-flex justify-content-end">
                            <i class="fas fa-shopping-basket mr-2"></i>
                        </div>
                    </div>
                </div>
                <nav class="shop-nav">
                    <div class="py-1 mb-2">
                        <ul class="nav justify-content-around text-muted top submenu">
                            <li class="dropdown">
                                <a class="p-2" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false" href="#">{{ trans('pages.forGirls') }}
                                </a>
                                <div class="dropdown-menu dropdown-default submenu" aria-labelledby="navbarDropdownMenuLink-333">
                                    <a class="dropdown-item" href="#">{{ trans('pages.forGirls1') }}</a>
                                    <a class="dropdown-item" href="#">{{ trans('pages.forGirls2') }}</a>
                                    <a class="dropdown-item" href="#">{{ trans('pages.forGirls3') }}</a>
                                    <a class="dropdown-item" href="#">{{ trans('pages.forGirls4') }}</a>
                                    <a class="dropdown-item" href="#">{{ trans('pages.forGirls5') }}</a>
                                    <a class="dropdown-item" href="#">{{ trans('pages.forGirls6') }}</a>
                                    <a class="dropdown-item" href="#">{{ trans('pages.forGirls7') }}</a>
                                    <a class="dropdown-item" href="#">{{ trans('pages.forGirls8') }}</a>
                                </div>

                            </li>
                            <li class="dropdown">
                                <a class="p-2" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false" href="#">{{ trans('pages.forBoys') }}
                                </a>
                                <div class="dropdown-menu dropdown-default submenu" aria-labelledby="navbarDropdownMenuLink-333">
                                    <a class="dropdown-item" href="#">{{ trans('pages.forBoys1') }}</a>
                                    <a class="dropdown-item" href="#">{{ trans('pages.forBoys2') }}</a>
                                    <a class="dropdown-item" href="#">{{ trans('pages.forBoys3') }}</a>
                                    <a class="dropdown-item" href="#">{{ trans('pages.forBoys4') }}</a>
                                    <a class="dropdown-item" href="#">{{ trans('pages.forBoys5') }}</a>
                                    <a class="dropdown-item" href="#">{{ trans('pages.forBoys6') }}</a>
                                </div>
                            </li>
                            <li>
                                <a class="p-2 text-danger" href="#">SALE</a>
                            </li>
                            <li>
                                <a class="p-2" href="#">{{ trans('pages.promotions') }}</a>
                            </li>
                            <li class="dropdown">
                                <a class="p-2" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false" href="#">{{ trans('pages.usefulInformation') }}
                                </a>
                                <div class="dropdown-menu dropdown-default submenu" aria-labelledby="navbarDropdownMenuLink-333">
                                    <a class="dropdown-item" href="#">Определение размера</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>



<div id="app">

    <!-- /Start your project here-->

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
<footer class="page-footer font-small  {{--winter-neva-gradient--}}pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left footer-text">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-5 mt-md-0 mt-3">

                <!-- Content -->
                <h5 class="text-uppercase">О нас</h5>
                <p>Here you can use rows and columns here to organize your footer content.</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Как нас найти</h5>
                <div class="z-depth-1-half map-container mb-4" style="height: 300px">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A6b6d287efa7c2ed3ba945378d5d116b40f6394d00a84b5c51366642736f57b90&amp;source=constructor" width="335" height="300" frameborder="0"></iframe>
                </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Контакты</h5>

                <ul class="list-unstyled">
                    <li>
                        <p>
                            <i class="fas fa-home mr-3"></i> г. Севастополь, ул. Университетская д.1 оф.255</p>
                    </li>
                    <li>
                        <p>
                            <i class="fas fa-envelope mr-3"></i> info@example.com</p>
                    </li>
                    <li>
                        <p>
                            <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    </li>
                    <li>
                        <p>
                            <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3"><span class="footer-text">© 2019 Copyright: Интернет магазин одежды для детей</span>
    </div>
    <!-- Copyright -->

</footer>
</html>
