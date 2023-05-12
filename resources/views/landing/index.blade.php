@extends('layout.landing')
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>Streamline Your Claims Adjudication Rules Management</h1>
            <h2>Easily input and manage the rules for your AI-powered claims adjudication system</h2>
            <a href="{{route('login')}}" class="download-btn"><i class="bx bxs-pencil"></i> Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="{{ asset('landing/assets/img/hero-bg.png') }}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>App Features</h2>
          <p>Explore the powerful features that streamline your data management process.</p>
        </div>

        <div class="row no-gutters">
          <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4> Rule-Based Data Entry Forms</h4>
                  <p>
                    Our app provides customizable forms specifically designed for medical data input, with fields and validation rules based on industry standards and medical necessity requirements.
                  </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Guided Rule Input </h4>
                  <p>
                    The app offers a step-by-step guide to help users input medical necessity rules in a structured and organized manner.
                  </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-plus-medical"></i>
                  <h4>Medical Terminology Assistance</h4>
                  <p>
                    The app includes a built-in medical terminology database and search functionality, allowing users to quickly find and input the correct terms, codes, and abbreviations.
                  </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-shield"></i>
                  <h4> Data Validation and Error Reporting</h4>
                  <p>
                    Our app features real-time data validation, checking entered information against predefined rules and flagging any discrepancies or errors.
                </p>
                </div>

              </div>
            </div>
          </div>
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{ asset('landing/assets/img/features.svg') }}" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End App Features Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">
        <div class="section-title">
            <h2>How System Works</h2>
            <p> Learn the simple steps to search, select, and save disease rules effortlessly.</p>
          </div>
        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="{{ asset('landing/assets/img/search_disease.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Search and Select Disease</h3>
            <p>
                Highlight the ease of searching for diseases using ICD-10 codes or disease names. Users can quickly find the desired disease by typing the code or name in the search bar.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Search diseases by ICD-10 code or disease name.</li>
              <li><i class="bi bi-check"></i> Display search results in real-time as the user types.</li>
              <li><i class="bi bi-check"></i> Provide auto-suggestions or a list of matching diseases for selection.</li>
            </ul>

          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="{{ asset('landing/assets/img/select_investigation.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Add Investigations</h3>
            <p>
                Emphasize the ability to add multiple investigations and set maximum permitted quantities for each. Users can specify the required diagnostic tests for the selected disease.
            </p>
            <ul>
                <li><i class="bi bi-check"></i> Add multiple investigations for comprehensive disease evaluation.</li>
                <li><i class="bi bi-check"></i> Show a list of available investigations with buttons for easy selection.</li>
                <li><i class="bi bi-check"></i>Allow users to specify the maximum permitted quantity for each investigation.</li>
              </ul>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="{{ asset('landing/assets/img/select_treatment.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>Add Treatments</h3>
            <p>Describe the various types of treatments that can be added, such as drugs, optical, medical, etc. Users can select and configure the treatments based on the specific disease.</p>
            <ul>
              <li><i class="bi bi-check"></i> Include a variety of treatment types including drugs, optical services, medical procedures,etc.</li>
              <li><i class="bi bi-check"></i> Categorize treatments by their ATC Codes for easy identification.</li>
              <li><i class="bi bi-check"></i> Allow users to set the maximum permitted quantity for each treatment.</li>
            </ul>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="{{ asset('landing/assets/img/save_rule.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Saving the Rule</h3>
            <p class="fst-italic">
                Explain the process of saving the rule and the importance of reviewing the entered information. Users should review the selected disease, investigations, and treatments before saving the rule.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Display a summary of the selected disease, investigations, and treatments for final verification.</li>
              <li><i class="bi bi-check"></i> Encourage users to double-check the maximum permitted quantities and treatment selections.</li>
              <li><i class="bi bi-check"></i> Provide a prominent "Save Rule" button to complete the rule creation process.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Details Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Get a visual tour of our user-friendly interface and see the platform in action.</p>
        </div>

      </div>

      <div class="container-fluid" data-aos="fade-up">
        <div class="gallery-slider swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="{{ asset('landing/assets/img/gallery/gallery-1.png') }}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{ asset('landing/assets/img/gallery/gallery-1.png') }}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="{{ asset('landing/assets/img/gallery/gallery-2.png') }}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{ asset('landing/assets/img/gallery/gallery-2.png') }}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="{{ asset('landing/assets/img/gallery/gallery-3.png') }}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{ asset('landing/assets/img/gallery/gallery-3.png') }}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="{{ asset('landing/assets/img/gallery/gallery-4.png') }}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{ asset('landing/assets/img/gallery/gallery-4.png') }}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="{{ asset('landing/assets/img/gallery/gallery-5.png') }}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{ asset('landing/assets/img/gallery/gallery-5.png') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{ asset('landing/assets/img/gallery/gallery-6.png') }}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{ asset('landing/assets/img/gallery/gallery-6.png') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{ asset('landing/assets/img/gallery/gallery-7.png') }}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{ asset('landing/assets/img/gallery/gallery-7.png') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{ asset('landing/assets/img/gallery/gallery-8.png') }}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{ asset('landing/assets/img/gallery/gallery-8.png') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{ asset('landing/assets/img/gallery/gallery-9.png') }}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{ asset('landing/assets/img/gallery/gallery-9.png') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{ asset('landing/assets/img/gallery/gallery-10.png') }}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{ asset('landing/assets/img/gallery/gallery-10.png') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{ asset('landing/assets/img/gallery/gallery-11.png') }}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{ asset('landing/assets/img/gallery/gallery-11.png') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{ asset('landing/assets/img/gallery/gallery-12.png') }}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{ asset('landing/assets/img/gallery/gallery-12.png') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{ asset('landing/assets/img/gallery/gallery-13.png') }}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{ asset('landing/assets/img/gallery/gallery-13.png') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{ asset('landing/assets/img/gallery/gallery-14.png') }}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{ asset('landing/assets/img/gallery/gallery-14.png') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{ asset('landing/assets/img/gallery/gallery-15.png') }}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{ asset('landing/assets/img/gallery/gallery-15.png') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{ asset('landing/assets/img/gallery/gallery-16.png') }}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{ asset('landing/assets/img/gallery/gallery-16.png') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{ asset('landing/assets/img/gallery/gallery-17.png') }}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{ asset('landing/assets/img/gallery/gallery-17.png') }}" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a href="{{ asset('landing/assets/img/gallery/gallery-18.png') }}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{ asset('landing/assets/img/gallery/gallery-18.png') }}" class="img-fluid" alt=""></a></div>
          </div>

          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Hear from our satisfied customers who have experienced the benefits of our disease rule system firsthand</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('landing/assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('landing/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('landing/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('landing/assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('landing/assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    {{-- <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Pricing</h2>
          <p> Find the perfect plan that suits your organization's needs and budget</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 box" data-aos="fade-right">
            <h3>Free</h3>
            <h4>$0<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
              <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>

          <div class="col-lg-4 box featured" data-aos="fade-up">
            <h3>Business</h3>
            <h4>$29<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>

          <div class="col-lg-4 box" data-aos="fade-left">
            <h3>Developer</h3>
            <h4>$49<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section --> --}}

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">

          <h2>Frequently Asked Questions</h2>
          <p>Get answers to frequently asked questions about our disease rule system</p>
        </div>

        <div class="accordion-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">How can I search for diseases in the system? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                <p>
                    You can search for diseases using either the disease name or the ICD-10 code in the search bar provided on the system's interface. Simply type in the name or code and click the search button to retrieve relevant results.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">Can I search for diseases using ICD-10 codes? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                <p>
                    Yes, you can search for diseases using their corresponding ICD-10 codes. The system supports searching by both disease names and ICD-10 codes to provide flexibility and ease of use.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"> How do I add investigations for a selected disease? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                <p>
                    On the disease details page, there will be a section dedicated to investigations. You can use the search functionality within this section to find the desired diagnostics. Select the investigations you want to add by clicking on them, and they will be added to the list of investigations for the selected disease.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed">How do I add treatments for a selected disease? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                <p>
                    Similar to adding investigations, on the disease details page, there will be a section dedicated to treatments. Use the search functionality within this section to find the relevant treatments. Select the treatments you want to add by clicking on them, and they will be included in the list of treatments for the selected disease.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed"> What is the purpose of setting a maximum permitted quantity for investigations? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                <p>
                    The maximum permitted quantity allows you to define the limit for how many times a specific investigation can be conducted for the given disease. This ensures adherence to the established guidelines and helps maintain consistency in the diagnostic approach.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed"> What is the significance of the maximum permitted quantity for treatments? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                  <p>
                    The maximum permitted quantity allows you to set limits on the number of times a specific treatment can be administered or performed for the given disease. It helps ensure appropriate utilization of resources and adherence to treatment guidelines.
                  </p>
                </div>
              </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Reach out to our friendly support team for any inquiries or assistance</p>
        </div>

        @if(session('success'))
        <div class="alert alert-success" id="success-alert-landing">
            {{ session('success') }}
        </div>
        @endif

        <div class="row">

          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6 info">
                <i class="bx bx-map"></i>
                <h4>Address</h4>
                <p>P.O.Box CT 8234, <br>Cantoments, Accra.</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-phone"></i>
                <h4>Call Us</h4>
                <p>+233 30 254 6742<br>+233 55 614 7860</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-envelope"></i>
                <h4>Email Us</h4>
                <p>info@rxhealthinfosystems.com</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-time-five"></i>
                <h4>Working Hours</h4>
                <p>Mon - Fri: 9AM to 5PM</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
                <form  action="{{ route('landing.store') }}" method="post" data-aos="fade-up">
                    @csrf
              <div class="form-group">
                <input placeholder="Your Name" type="text" name="name" class="form-control" required>
              </div>
              <div class="form-group mt-3">
                <input placeholder="Your Email" type="email" class="form-control" name="email" required>
              </div>
              <div class="form-group mt-3">
                <input placeholder="Subject" type="text" class="form-control" name="subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea placeholder="Message" class="form-control" name="message" rows="5" required></textarea>
              </div>

              <div class="text-center"><button class="btn ptn-primary" type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  @endsection
