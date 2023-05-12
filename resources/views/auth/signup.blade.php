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
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                  </div>
                  @if($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif

                   <!-- Display success message -->
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                  <form class="row g-3 mt-1" method="POST" action="{{ route('register.store') }}">
                    @csrf
                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Name</label>
                      <input type="text" name="name" class="form-control"  required>
                      @error('name')
                        <span class="text-danger">{{ $message }}</span>
                       @enderror
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control"  required>
                      @error('email')
                      <span class="text-danger">{{ $message }}</span>
                     @enderror
                    </div>


                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" required>
                      @error('password')
                      <span class="text-danger">{{ $message }}</span>
                     @enderror
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>

                  </form>

                 <div class="row mt-2 mb-5">
                    <div class="col-12">
                        <p class="small mb-0">Already have an account? <a href="{{route('login')}}">Log in</a></p>
                      </div>
                 </div>

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
