<div>
    <div wire:ignore class="alert alert-success alert-dismissible fade d-none" role="alert" id="success-alert">
        <span id="success-message"></span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="mt-5">
        <h5 class="">Adjudication Rule for: {{ $diseaseName }} </h5>
        <hr>

        <table id="disease-table" class="table table-striped table-hover mt-5">
            <thead>
                <tr>
                    <th>Disease</th>
                    <th>ICD 10 Code</th>
                    <th>Disease Search Type</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $disease->disease_name }}</td>
                    <td>{{ $disease->icd_10_code }}</td>
                    <td>{{ $disease->disease_search_type }}</td>
                </tr>
            </tbody>
        </table>


    <h3 class="mt-5">Investigations</h3>
    <table id="investigations-table" class="table table-striped table-hover">
        <thead>
            <tr>
                <th></th>
                <th>Diagnostics</th>
                <th>Class</th>
                <th>Max Permitted</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($investigations as $adjudicationArray)
                @php
                    $adjudication = (object) $adjudicationArray;
                @endphp
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $adjudication->item_name }}</td>
                    <td>{{ $adjudication->item_service }}</td>
                    <td>{{ $adjudication->max_permitted }}</td>

                </tr>
            @empty
                <tr>
                    <td colspan="5">No investigations found</td>
                </tr>
            @endforelse
        </tbody>

    </table>

    <h3 class="mt-5">Treatments</h3>

    <table id="treatments-table" class="table table-striped table-hover">
        <thead>
            <tr>
                <th></th>
                <th>Treatment</th>
                <th>ATC Code 3</th>
                <th>Class</th>
                <th>Max Permitted</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($treatments as $adjudication)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{  $adjudication->item_name }}</td>
                <td>{{  $adjudication->atccode3 }}</td>
                <td>{{  $adjudication->item_service }}</td>
                <td>{{  $adjudication->max_permitted }}</td>

            </tr>
            @empty
            <tr>
                <td colspan="6">No treatments found</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    </div>


    @push('scripts')
    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('adjudicationEvent', function(data) {
                var alertDiv = document.getElementById("success-alert");
                var messageSpan = document.getElementById("success-message");

                if (data.type === "success") {
                    alertDiv.classList.remove("d-none");
                    alertDiv.classList.remove("fade");
                    alertDiv.classList.remove("alert-danger");
                    alertDiv.classList.add("alert-success");
                    messageSpan.innerHTML = data.message;

                } else if (data.type === "error") {
                    alertDiv.classList.remove("d-none");
                    alertDiv.classList.remove("fade");
                    alertDiv.classList.remove("alert-success");
                    alertDiv.classList.add("alert-danger");
                    messageSpan.innerHTML = data.message;
                } else {
                    alertDiv.classList.add("d-none");
                    messageSpan.innerHTML = "";
                }

                setTimeout(function() {
                    alertDiv.classList.add("fade");
                    alertDiv.classList.add("d-none");
                }, 5000);
            });
        });
    </script>
@endpush
</div>
