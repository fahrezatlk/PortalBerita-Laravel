<!doctype html>
<html lang="en">
  @include('front.includes.style')
  
  <body>
    @include('front.includes.header')
    @include('front.includes.slider')
    
    <div class="container">
      @yield('content')
    </div>
    
    @include('front.includes.footer')
    @include('front.includes.js')
  </body>
</html>