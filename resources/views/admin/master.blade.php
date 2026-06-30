<!doctype html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

  
  @include('admin.partials.head')
  <body class="vertical  light  ">
    <div class="wrapper">
     @include('admin.partials.nav')

     
      @include('admin.partials.sidebar')
      @yield('content')

    </div> <!-- .wrapper -->
      @include('admin.partials.script')


  </body>
</html>