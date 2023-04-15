<!doctype html>
<html lang="Ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Clothes Recomendation') }}</title>

    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}">
    <meta name="format-detection" content="telephone=no">



    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Scripts -->

    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/rtl.css')}}">
    @livewireStyles
    @stack('css')

</head>

<body>
    <header id="pt-header">
        <!-- pt-mobile menu -->
        <nav class="panel-menu mobile-main-menu">
            <ul>
                <li><a href="{{ route('home') }}">الرئيسية</a></li>
                <li><a href="index-rtl.html">ملابس الرجال</a></li>
                <li><a href="index-rtl.html">ملابس النساء</a></li>
                <li><a href="index-rtl.html">من نحن</a></li>
            </ul>
            <div class="mm-navbtn-names">
                <div class="mm-closebtn">غلق</div>
                <div class="mm-backbtn">رجوع</div>
            </div>
        </nav>
        <!-- pt-mobile-header -->
        <div class="pt-mobile-header">
            <div class="container-fluid">
                <div class="pt-header-row">
                    <!-- mobile menu toggle -->
                    <div class="pt-mobile-parent-menu">
                        <div class="pt-menu-toggle">
                            <svg width="24" height="24" viewBox="0 0 24 24">
                                <use xlink:href="#icon-mobile-menu-toggle"></use>
                            </svg>
                        </div>
                    </div>
                    <!-- /mobile menu toggle -->
                    <div class="pt-logo-container">
                        <!-- mobile logo -->
                        <div class="pt-logo pt-logo-alignment">
                            <a href="{{ route('home') }}" itemprop="url">
                                <h2 class="pt-title">Clothes</h2>
                            </a>
                        </div>
                        <!-- /mobile logo -->
                    </div>
                    <!-- search -->
                    <div class="pt-mobile-parent-search pt-parent-box"></div>
                    <!-- /search -->
                    <div class="pt-mobile-parent-account pt-parent-box d-block position-absolute" style="left:0"></div>


                </div>
            </div>
        </div>
        <!-- pt-desktop-header -->
        <div class="pt-desktop-header">
            <div class="container-fluid">
                <div class="headinfo-box form-inline">
                    <!-- logo -->
                    <div class="pt-logo pt-logo-alignment">
                        <a href="{{ route('home') }}" itemprop="url">
                            <h2 class="pt-title">Clothes</h2>
                        </a>
                    </div>
                    <!-- /logo -->
                    <div class="navinfo text-left">
                        <!-- pt-menu -->
                        <div class="pt-desctop-parent-menu">
                            <div class="pt-desctop-menu" id="js-include-desktop-menu">
                                <nav>
                                    <ul>
                                        <li class="dropdown">
                                            <a href="{{ route('home') }}"><span>الرئيسية</span></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="index-rtl.html"><span>ملابس الرجال</span></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="index-rtl.html"><span>ملابس النساء</span></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="index-rtl.html"><span>من نحن</span></a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- /pt-menu -->
                    </div>
                    <div class="options">
                        <!-- pt-search -->
                        <div class="pt-desctop-parent-search pt-parent-box">

                            <div class="pt-search pt-dropdown-obj js-dropdown">
                                <button class="pt-dropdown-toggle" data-tooltip="بحث" data-tposition="bottom">
                                    <svg width="24" height="24" viewBox="0 0 24 24">
                                        <use xlink:href="#icon-search"></use>
                                    </svg>
                                </button>
                                <div class="pt-dropdown-menu">
                                    <div class="container">
                                        <form>
                                            <div class="pt-col">
                                                <input type="text" class="pt-search-input"
                                                    placeholder="ابحث عن ما تريد ....">
                                                <button class="pt-btn-search" type="submit">
                                                    <svg width="24" height="24" viewBox="0 0 24 24">
                                                        <use xlink:href="#icon-search"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="pt-col">
                                                <button class="pt-btn-close">
                                                    <svg width="16" height="16" viewBox="0 0 16 16">
                                                        <use xlink:href="#icon-close"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="pt-info-text">
                                                ابحث عن ما تريد ؟
                                            </div>
                                            <div class="search-results"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /pt-search -->
                        <!-- pt-account -->
                        <div class="pt-desctop-parent-account pt-parent-box">
                            @if(!auth('admin')->check() && !auth('user')->check() && !auth('company')->check())
                            <div class="pt-account pt-dropdown-obj js-dropdown">
                                <button class="pt-dropdown-toggle" data-tooltip="تسجيل الدخول" data-tposition="bottom">
                                    <svg width="24" height="24" viewBox="0 0 24 24">
                                        <use xlink:href="#icon-user"></use>
                                    </svg>
                                </button>
                                <div class="pt-dropdown-menu">
                                    <div class="pt-mobile-add">
                                        <button class="pt-close">
                                            <svg>
                                                <use xlink:href="#icon-close"></use>
                                            </svg>غلق
                                        </button>
                                    </div>
                                    <div class="pt-dropdown-inner">
                                        <ul>
                                            <li><a href="{{ route('company.login') }}">
                                                    <i class="pt-icon">
                                                        <svg width="18" height="23">
                                                            <use xlink:href="#icon-lock"></use>
                                                        </svg>
                                                    </i>
                                                    <span class="pt-text">دخول الشركة</span>
                                                </a>
                                            </li>
                                            <li><a href="{{ route('user.login') }}">
                                                    <i class="pt-icon">
                                                        <svg width="18" height="23">
                                                            <use xlink:href="#icon-lock"></use>
                                                        </svg>
                                                    </i>
                                                    <span class="pt-text">دخول المستخدم</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @else
                                <div class="pt-account pt-dropdown-obj js-dropdown">
                                    <button class="pt-dropdown-toggle" data-tooltip="حسابى" data-tposition="bottom">
                                        <svg width="24" height="24" viewBox="0 0 24 24">
                                            <use xlink:href="#icon-user"></use>
                                        </svg>
                                    </button>
                                    <div class="pt-dropdown-menu">
                                        <div class="pt-mobile-add">
                                            <button class="pt-close">
                                                <svg>
                                                    <use xlink:href="#icon-close"></use>
                                                </svg>غلق
                                            </button>
                                        </div>
                                        <div class="pt-dropdown-inner">
                                            @auth('admin')
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('admin.dashboard') }}">
                                                            <span class="pt-text">لوحة التحكم</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('admin.profile') }}">
                                                            <span class="pt-text">البروفايل</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('admin.changePassword') }}">
                                                            <span class="pt-text">تغيير كلمة السر</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('admin.settings') }}">
                                                            <span class="pt-text">الإعدادات</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('admin.logout') }}">
                                                            <span class="pt-text">خروج</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            @endauth
                                            @auth('company')
                                            <ul>
                                                <li>
                                                    <a href="{{ route('company.profile') }}">
                                                        <span class="pt-text">البروفايل</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('company.changePassword') }}">
                                                        <span class="pt-text">تغيير كلمة السر</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('company.settings') }}">
                                                        <span class="pt-text">الإعدادات</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('company.logout') }}">
                                                        <span class="pt-text">خروج</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            @endauth
                                            @auth('user')
                                                <ul>
                                                    <ul>
                                                        <li>
                                                            <a href="{{ route('user.profile') }}">
                                                                <span class="pt-text">البروفايل</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('user.changePassword') }}">
                                                                <span class="pt-text">تغيير كلمة السر</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('user.settings') }}">
                                                                <span class="pt-text">الإعدادات</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('user.logout') }}">
                                                                <span class="pt-text">خروج</span>
                                                            </a>
                                                        </li>
                                                    </ul>

                                                </ul>
                                            @endauth

                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <!-- /pt-account -->

                    </div>
                </div>
            </div>
        </div>
        <!-- stuck nav -->
        <div class="pt-stuck-nav">
            <div class="container-fluid">
                <div class="pt-header-row">

                    <div class="pt-logo pt-logo-alignment d-none d-lg-block">
                        <a href="{{ route('home') }}" itemprop="url">
                            <h2 class="pt-title">Clothes</h2>
                        </a>
                    </div>

                    <div class="pt-logo-container">
                        <!-- mobile logo -->
                        <div class="pt-logo pt-logo-alignment">
                            <a href="{{ route('home') }}" itemprop="url">
                                <h2 class="pt-title">Clothes</h2>
                            </a>
                        </div>
                        <!-- /mobile logo -->
                    </div>
                    <div class="pt-stuck-parent-menu"></div>
                    <div class="pt-stuck-parent-search pt-parent-box" style="margin-left: 15px;"></div>
                    <div class="pt-stuck-parent-account pt-parent-box d-block position-absolute" style="left:0px"></div>
                </div>
            </div>
        </div>
    </header>
    @yield('breadcrumb')
    <main id="pt-pageContent">
        @yield('content')
    </main>







    <footer id="pt-footer" class="pt-offset-10">
        <div class="pt-footer-custom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- copyright -->
                        <div class="pt-box-copyright" dir="ltr">
                            &copy; 2023 Clothes Recomendation. All Rights Reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" id="js-back-to-top" class="pt-back-to-top">
        <span class="pt-icon">
            <svg version="1.1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;"
                xml:space="preserve">
                <g>
                    <polygon fill="currentColor" points="20.9,17.1 12.5,8.6 4.1,17.1 2.9,15.9 12.5,6.4 22.1,15.9 	">
                    </polygon>
                </g>
            </svg>
        </span>
        <span class="pt-text">BACK TO TOP</span>
    </a>


    @include('layouts.svg')
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="external/jquery/jquery.min.js"><\/script>')
    </script>
    <script async src="{{ asset('js/bundle.js') }}"></script>


    @livewireScripts
    @stack('js')
</body>

</html>
