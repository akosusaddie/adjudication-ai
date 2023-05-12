@extends('layout.auth')
@section('content')
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="{{ asset('landing/assets/img/logo-sm.png') }}" alt="">
                  <span class="d-none d-lg-block">Adjudication-AI</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                  </div>
                  @if($errors->any())
                  <div class="alert alert-danger" id="error-alert">
                      <ul>
                          @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif

                   <!-- Display success message -->
                    @if(session('success'))
                    <div class="alert alert-success" id="success-alert">
                        {{ session('success') }}
                    </div>
                    @endif

                  <form class="row g-3 mt-1" method="POST" action="{{ route('signin') }}">
                    @csrf
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" class="form-control"  @error('password') is-invalid @enderror name="password" required autocomplete="current-password"/>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="{{route('register')}}">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <span style="color: #ffffff00">Designed by <a style="color: #ffffff00" href="https://bootstrapmade.com/">BootstrapMade</a></span>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <footer  class="footer text-center">
    <div class="copyright">
      &copy; Copyright <strong><span>Adjudication-AI</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

@endsection
@section('scripts')
<script>
  $(document).ready(function() {
    // Auto-hide messages after 5 seconds
    setTimeout(function() {
      $('.alert').fadeOut('slow');
    }, 5000);
  });
</script>
@endsection
