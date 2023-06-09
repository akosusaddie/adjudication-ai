<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body>

  <main>
    <div class="container">

      <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1>404</h1>
        <h2>The page you are looking for doesn't exist.</h2>
        <a class="btn" href="{{route('home')}}">Back to home</a>
        <img src="{{ asset('assets/img/not-found.svg') }}" class="img-fluid py-5" alt="Page Not Found">
        <div class="credits">
            <span style="color:rgba(255, 255, 255, 0)"> Designed by <a style="color:rgba(255, 255, 255, 0)" href="https://bootstrapmade.com/">BootstrapMade</a></span>
           </div>
      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('layout.scripts')

</body>

</html>
