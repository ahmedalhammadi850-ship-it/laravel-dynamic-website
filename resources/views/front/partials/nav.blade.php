<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <!-- استيراد خط زخرفي من Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- الشعار -->
    <a class="navbar-brand" href="#" style="
        font-family: 'Great Vibes', cursive;
        font-size: 22px;
        background: linear-gradient(to right, #ff7e5f, #feb47b);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
        display: inline-block;
    ">
      ✦ Al Hammadi Co. ✦
    </a>

    <!-- زر القوائم على الهواتف -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>

    <!-- روابط الصفحة -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="{{ route('front.index') }}" class="@yield('index_active') nav-link">{{ __('keywords.Home') }}</a>
            <a href="{{ route('front.about') }}" class="@yield('about_active') nav-link">{{ __('keywords.About') }}</a>
            <a href="{{ route('front.service') }}" class="@yield('service_active') nav-link">{{ __('keywords.Service') }}</a>
            <a href="{{ route('front.contact') }}" class="@yield('contact_active') nav-link">{{ __('keywords.Contact') }}</a>
        </div>
    </div>

    <!-- زر اللغة على اليمين -->
    <div class="d-flex align-items-center ms-auto">
        @php
            $target = LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar';
        @endphp
        <a href="{{ LaravelLocalization::getLocalizedURL($target) }}"
           class="w-8 h-8 flex items-center justify-center rounded-full bg-red-600 hover:bg-red-700 text-white font-bold transition-colors duration-500"
           title="{{ $target === 'ar' ? 'العربية' : 'English' }}">
            {{ strtoupper($target) }}
        </a>
    </div>
</nav>
