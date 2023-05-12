  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script>
    function goBack() {
      window.history.back();
    }
    </script>
    <script>
        $(document).ready(function() {
          // Auto-hide messages after 5 seconds
          setTimeout(function() {
            $('.alert').fadeOut('slow');
          }, 5000);
        });

      </script>



<script>
    function previewImage(input) {
        let previewDiv = document.querySelector("#preview-div-profile");

        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function(e) {
                let imageUrl = e.target.result;
                previewDiv.style.backgroundImage = `url(${imageUrl})`;
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            previewDiv.style.backgroundImage = `url('{{ asset('assets/img/avatar.jpg') }}')`;
        }
    }
</script>

<script>
    // Automatically hide error alert after 5 seconds
    setTimeout(function() {
        document.getElementById('error-alert').style.display = 'none';
    }, 5000);

    // Automatically hide success alert after 5 seconds
    setTimeout(function() {
        document.getElementById('success-alert').style.display = 'none';
    }, 5000);
</script>

  @livewireScripts
    @stack('scripts')
