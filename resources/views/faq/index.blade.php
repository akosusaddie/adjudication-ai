@extends('layout.app')
@section('title', 'FAQ')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Frequently Asked Questions</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Frequently Asked Questions</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section faq">
      <div class="row">
        <div class="col-lg-12">
          <!-- F.A.Q Group 2 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">FAQ</h5>

              <div class="accordion accordion-flush" id="faq-group-2">

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-1" type="button" data-bs-toggle="collapse">
                        How can I search for diseases in the system?
                    </button>
                  </h2>
                  <div id="faqsTwo-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                        You can search for diseases using either the disease name or the ICD-10 code in the search bar provided on the system's interface. Simply type in the name or code and click the search button to retrieve relevant results.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-2" type="button" data-bs-toggle="collapse">
                        Can I search for diseases using ICD-10 codes?
                    </button>
                  </h2>
                  <div id="faqsTwo-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                        Yes, you can search for diseases using their corresponding ICD-10 codes. The system supports searching by both disease names and ICD-10 codes to provide flexibility and ease of use.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-3" type="button" data-bs-toggle="collapse">
                        How do I select a specific disease from the search results?
                    </button>
                  </h2>
                  <div id="faqsTwo-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                        Once you've performed a search, you can browse through the list of search results and select a specific disease by clicking on it.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-4" type="button" data-bs-toggle="collapse">
                        How do I add investigations for a selected disease?
                    </button>
                  </h2>
                  <div id="faqsTwo-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                        On the disease details page, there will be a section dedicated to investigations. You can use the search functionality within this section to find the desired diagnostics. Select the investigations you want to add by clicking on them, and they will be added to the list of investigations for the selected disease.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-5" type="button" data-bs-toggle="collapse">
                        Can I add multiple investigations for a single disease?
                    </button>
                  </h2>
                  <div id="faqsTwo-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                        Yes, you can add multiple investigations for a single disease. The system allows you to select and include multiple diagnostics that are relevant to the disease you're setting rules for.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" data-bs-target="#faqsTwo-5" type="button" data-bs-toggle="collapse">
                        What is the purpose of setting a maximum permitted quantity for investigations?
                      </button>
                    </h2>
                    <div id="faqsTwo-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                      <div class="accordion-body">
                        The maximum permitted quantity allows you to define the limit for how many times a specific investigation can be conducted for the given disease. This ensures adherence to the established guidelines and helps maintain consistency in the diagnostic approach.
                      </div>
                    </div>
                  </div>


                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" data-bs-target="#faqsTwo-5" type="button" data-bs-toggle="collapse">
                        How do I add treatments for a selected disease?
                      </button>
                    </h2>
                    <div id="faqsTwo-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                      <div class="accordion-body">
                        Similar to adding investigations, on the disease details page, there will be a section dedicated to treatments. Use the search functionality within this section to find the relevant treatments. Select the treatments you want to add by clicking on them, and they will be included in the list of treatments for the selected disease.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" data-bs-target="#faqsTwo-5" type="button" data-bs-toggle="collapse">
                        Are there different types of treatments available in the system?
                      </button>
                    </h2>
                    <div id="faqsTwo-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                      <div class="accordion-body">
                        Yes, the system offers various types of treatments, including drugs, optical services, medical procedures, administrative tasks (such as consultations), and more. You can select the appropriate treatment types based on the requirements of the disease.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" data-bs-target="#faqsTwo-5" type="button" data-bs-toggle="collapse">
                        What is the significance of the maximum permitted quantity for treatments?
                      </button>
                    </h2>
                    <div id="faqsTwo-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                      <div class="accordion-body">
                        The maximum permitted quantity allows you to set limits on the number of times a specific treatment can be administered or performed for the given disease. It helps ensure appropriate utilization of resources and adherence to treatment guidelines.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" data-bs-target="#faqsTwo-5" type="button" data-bs-toggle="collapse">
                        How do I save the rule after setting the investigations and treatments?
                      </button>
                    </h2>
                    <div id="faqsTwo-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                      <div class="accordion-body">
                        After setting the investigations and treatments for a disease, there will be a "Save Rule" button or similar option provided on the page. Clicking this button will save the rule, storing the defined guidelines for future reference and use.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" data-bs-target="#faqsTwo-5" type="button" data-bs-toggle="collapse">
                        Can I review the rule before saving?
                      </button>
                    </h2>
                    <div id="faqsTwo-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                      <div class="accordion-body">
                        Yes, before saving the rule, you will have the opportunity to review all the details you've entered, including the selected disease, investigations, and treatments. Take a moment to verify that everything is correct, and make any necessary adjustments before proceeding with the rule-saving process.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" data-bs-target="#faqsTwo-5" type="button" data-bs-toggle="collapse">
                        What happens if I forget to set the maximum permitted quantity for an item?
                      </button>
                    </h2>
                    <div id="faqsTwo-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                      <div class="accordion-body">
                        It is important to set the maximum permitted quantity for each investigation and treatment. If you forget to specify the quantity, the system may not enforce any limitations or restrictions, which could affect the accuracy and consistency of the guidelines. Ensure that you provide the appropriate maximum quantity for each item.
                      </div>
                    </div>
                  </div>


              </div>

            </div>
          </div><!-- End F.A.Q Group 2 -->


        </div>

      </div>
    </section>

  </main><!-- End #main -->
@endsection
