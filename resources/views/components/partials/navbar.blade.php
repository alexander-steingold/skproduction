<!-- Navbar Start -->
<nav class="navbar" id="navbar">
    <div class="container flex flex-wrap items-center justify-end">
        <a href="{{ route('index') }}">
            <img src="{{ asset('theme/src/assets/images/sklogo2.png') }}" class="md:ms-0 mx-auto w-36" alt="">
        </a>


        <div class="nav-icons flex items-center lg_992:order-2 ms-auto">
            <div class="navigation  lg_992:order-1 lg_992:flex hidden" id="menu-collapse">
                <ul class="navbar-nav nav-light" id="navbar-navlist">

                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('index') }}">ראשי</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}#about">אודות</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}#features">שירותים</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#studio">אולפן</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}#tools">ציוד</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">מחירים</a>
                    </li>
                    {{--                <li class="nav-item">--}}
                    {{--                    <a class="nav-link" href="#blog">Blog</a>--}}
                    {{--                </li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">צור קשר</a>
                    </li>
                    <li class="nav-item">
                        <div class="flex nav-link -8">
                            <a class="font-medium text-lg  mx-1" href="tel:0501234567">
                                050123456
                            </a>
                            <i class="uil uil-phone text-lg text-green-600 me-1"></i>
                        </div>
                    </li>

                </ul>
            </div>
            <!-- Navbar Button -->
            {{--            <ul class="list-none menu-social mb-0">--}}
            {{--                <li class="inline">--}}
            {{--                    <a href="/#">--}}
            {{--                        <span class="login-btn-primary"><span--}}
            {{--                                class="btn btn-sm btn-icon rounded-full bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white"><i--}}
            {{--                                    class="uil uil-youtube"></i></span></span>--}}
            {{--                        <span class="login-btn-light"><span--}}
            {{--                                class="btn btn-sm btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i--}}
            {{--                                    class="uil uil-youtube"></i></span></span>--}}
            {{--                    </a>--}}
            {{--                </li>--}}
            {{--                <li class="inline">--}}
            {{--                    <a href="">--}}
            {{--                        <span class="login-btn-primary"><span--}}
            {{--                                class="btn btn-sm btn-icon rounded-full bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white"><i--}}
            {{--                                    class="uil uil-facebook"></i></span></span>--}}
            {{--                        <span class="login-btn-light"><span--}}
            {{--                                class="btn btn-sm btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i--}}
            {{--                                    class="uil uil-facebook"></i></span></span>--}}
            {{--                    </a>--}}
            {{--                </li>--}}
            {{--                <li class="inline">--}}
            {{--                    <a href="">--}}
            {{--                        <span class="login-btn-primary"><span--}}
            {{--                                class="btn btn-sm btn-icon rounded-full bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white"><i--}}
            {{--                                    class="uil uil-instagram"></i></span></span>--}}
            {{--                        <span class="login-btn-light"><span--}}
            {{--                                class="btn btn-sm btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i--}}
            {{--                                    class="uil uil-instagram"></i></span></span>--}}
            {{--                    </a>--}}
            {{--                </li>--}}
            {{--            </ul>--}}
            <!-- Navbar Collapse Manu Button -->
            <button data-collapse="menu-collapse" type="button"
                    class="collapse-btn inline-flex items-center ms-3 text-dark dark:text-white lg_992:hidden"
                    aria-controls="menu-collapse" aria-expanded="false">
                <span class="sr-only">Navigation Menu</span>
                <i class="mdi mdi-menu mdi-24px"></i>
            </button>
        </div>

        <!-- Navbar Manu -->

    </div>
</nav>

<!-- Navbar End -->
