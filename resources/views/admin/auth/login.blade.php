<!doctype html>
<html
      dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Dashboard</title>
    <link rel="icon" href="favicon.ico">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/app-light.css') }}" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('admin/css/app-dark.css') }}" id="darkTheme" disabled>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="light {{ LaravelLocalization::getCurrentLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<div class="wrapper vh-100">
    <div class="row align-items-center h-100">

        {{-- زر تغيير اللغة في منتصف الصفحة فوق الفورم --}}
        <div class="col-12 d-flex justify-content-center mb-4">
            @php
                $target = LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar';
            @endphp
            <a href="{{ LaravelLocalization::getLocalizedURL($target) }}"
               class="w-12 h-12 flex items-center justify-center rounded-full bg-red-700 hover:bg-red-800 text-blue font-bold text-lg transition-colors duration-500 shadow-lg"
               title="{{ $target === 'ar' ? 'العربية' : 'English' }}">
                {{ strtoupper($target) }}
            </a>
        </div>

        {{-- الفورم --}}
        <form action="{{ route('admin.login') }}" method="post" class="col-lg-3 col-md-4 col-10 mx-auto text-center">
            @csrf

            {{-- شعار --}}
            <a class="navbar-brand mx-auto mb-3 flex-fill text-center" href="./index.html">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" 
                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                  <g>
                    <polygon class="st0" points="78,105 15,105 24,87 87,87" />
                    <polygon class="st0" points="96,69 33,69 42,51 105,51" />
                    <polygon class="st0" points="78,33 15,33 24,15 87,15" />
                  </g>
                </svg>
            </a>

            <h1 class="h6 mb-3">{{ __('keywords.Sign In') }}</h1>

            {{-- البريد --}}
            <div class="form-group">
                <label for="inputEmail" class="sr-only">{{ __('keywords.email') }}</label>
                <input name="email" type="email" id="inputEmail" class="form-control form-control-lg" 
                       placeholder="{{ __('keywords.Email') }}" required autofocus>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            {{-- كلمة المرور --}}
            <div class="form-group">
                <label for="inputPassword" class="sr-only">Password</label>
                <input name="password" type="password" id="inputPassword" class="form-control form-control-lg" 
                       placeholder="{{ __('keywords.Password') }}" >
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            {{-- تذكرني --}}
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" name="remember" value="remember-me"> {{ __('keywords.Stay logged in') }}
                </label>
            </div>

            {{-- زر الدخول --}}
            <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('keywords.Let me in') }}</button>

            <p class="mt-5 mb-3 text-muted">© 2020</p>
        </form>

    </div>
</div>

<!-- JS -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/js/jquery.stickOnScroll.js') }}"></script>
<script src="{{ asset('assets/js/tinycolor-min.js') }}"></script>
<script src="{{ asset('assets/js/config.js') }}"></script>
<script src="{{ asset('assets/js/apps.js') }}"></script>

</body>
</html>
