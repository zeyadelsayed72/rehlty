<div class="navs-container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="" class="logo"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">الرئيسيه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">نبذة عنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('categories') ? 'active' : '' }}"
                            href="{{ route('categories') }}">الاقسام</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('ads') ? 'active' : '' }}"
                            href="{{ route('ads') }}">العروض</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">اتصل بنا</a>
                    </li>
                </ul>
                <form class="col-md-3" action="{{ route('search') }}" method="GET">
                    <div class="form-group">
                        <input class="form-control" placeholder="إبحث هنا ..." type="text" name="q"/>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </form>
                <div class="butns d-flex ms-2">
                    <div class="dropdown">
                        <button class="butn secondary_border_butn mx-1" type="button"
                            data-bs-toggle="dropdown">
                            <i class="fa-solid fa-circle-user"></i> حسابي
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="حسابي" class="dropdown-item" href="{{ route('login') }}">تسجيل الدخول</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">إنشاء حساب</a></li>
                        </ul>
                    </div>
                    <a href="{{ route('add_ad') }}" class="butn primary_butn mx-1">
                        <i class="fa-solid fa-plus"></i> إضافة إعلان
                    </a>
                    <a href="#" class="butn bg-gray color-third mx-1">
                        <i class="fa-solid fa-earth-americas"></i> EN
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>
