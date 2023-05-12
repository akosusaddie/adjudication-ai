@extends('layout.auth')

@section('content')
    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Verify Your Email Address</h5>
                                    </div>
                                    <div class="text-center">
                                        <p>Please check your email for a verification link. If you did not receive the email, <a href="{{ route('verification.resend') }}">click here to request another</a>.</p>
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
    </main>
@endsection
