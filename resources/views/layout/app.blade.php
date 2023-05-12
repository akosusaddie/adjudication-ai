<!DOCTYPE html>
<html lang="en">

@include('layout.head')
<body>

    @include('layout.header')
    @include('layout.leftmenu')
    @yield('content')
    @include('layout.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('layout.scripts')

</body>

</html>
