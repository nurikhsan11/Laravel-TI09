@include('front.layout.top')
@include('front.layout.menu')

<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      @yield('content')
      
    </div>
  </main>
</div>
@include('front.layout.bottom')