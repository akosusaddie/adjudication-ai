<div>
    <div class="mt-2">
     <div wire:ignore class="alert alert-success alert-dismissible fade d-none" role="alert" id="success-alert">
         <span id="success-message"></span>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
     <form wire:submit.prevent="update">
          <div class="pl-3">
             <div class="row mb-3">
                 <label class="col-sm-12 col-form-label font-weight-bold">Disease:</label>
                 <div class="col-sm-12">
                     <input class="form-control @error('selectedDisease') is-invalid @enderror" type="search" id="disease" name="disease" wire:model="selectedDisease" wire:keydown.arrow-down="incrementHighlight" wire:keydown.arrow-up="decrementHighlight" wire:keydown.enter.prevent="selectDisease" wire:keydown.tab="selectDisease" wire:blur="clearDiseases" placeholder="Search for any disease" value="{{ $selectedDisease }}" readonly>

                     @error('selectedDisease')
                         <span class="invalid-feedback">{{ $message }}</span>
                     @enderror

                     @if (!empty($diseases) && strlen($selectedDisease) > 0 )

                     <ul style="list-style: none; cursor:pointer;">
                        @forelse ($diseases as $index => $disease)
                            <li wire:click="selectDisease({{ $index }})" class=" mt-1 {{ $highlightIndex === $index ? 'highlight' : '' }}">{{ $searchType === 'icd_10_code' ? $disease->disease : $disease->tg_disease_name }}</li>
                        @empty

                        @endforelse
                    </ul>
                     @endif

                 </div>

             </div>

    <div class="row mb-3 mt-2">
    <label class="col-sm-12 col-form-label font-weight-bold">Investigations:</label>
    <div class="col-sm-12">
        <input class="form-control @error('selectedInvestigations') is-invalid @enderror" type="search" id="labs" name="investigations" wire:model="selectedInvestigation" wire:keydown.arrow-down="incrementHighlight" wire:keydown.arrow-up="decrementHighlight" wire:keydown.enter.prevent="addInvestigation" wire:keydown.tab="addInvestigation" wire:blur="clearInvestigations" placeholder="Please search for any diagnostics" value="{{ $selectedInvestigation }}">

        @error('selectedInvestigations')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror

    </div>

    @if (!empty($investigations) && strlen($selectedInvestigation) > 0 )
        <div class="card shadow-lg mt-2">
            <div class="card-body">
                <ul style="list-style: none;">
                    @forelse ($investigations as $index => $investigation)
                        <li class="mt-1 {{ $highlightIndex === $index ? 'highlight' : '' }}">{{ $investigation->item }} <i class="bi bi-plus-circle mt-2 ml-2 text-primary" wire:click.prevent="addInvestigation({{ $index }})"></i></li>
                    @empty
                        <p>No results</p>
                    @endforelse
                </ul>
            </div>
        </div>
    @endif

    <div class="ml-5">
        <table class="table table-responsive-md table-bordered mt-5">
            <thead>
                <tr>
                    <th>Diagnostics</th>
                    <th>Max Permitted</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($selectedInvestigations as $index => $investigation)
                    <tr>
                        <td>{{ $investigation['name'] }}</td>
                        <td>
                            <input class="form-control @error('selectedInvestigations.'.$index.'.max_permitted') is-invalid @enderror" type="number" wire:model.defer="selectedInvestigations.{{ $index }}.max_permitted" min="0" value="{{ $investigation['max_permitted'] }}">

                            @error('selectedInvestigations.'.$index.'.max_permitted')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror

                        </td>
                        <td>
                            <i class="bi bi-trash text-danger" wire:click.prevent="removeInvestigation({{ $index }})"></i>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

<div class="row mb-3 mt-5">
    <label class="col-sm-12 col-form-label font-weight-bold">Treatment(Pharmacological/Non-pharmacological):</label>
    <div class="col-sm-12">
        <input class="form-control  @error('selectedTreatments') is-invalid @enderror" type="search" id="treatment" name="treatment" wire:model="selectedTreatment" wire:keydown.arrow-down="incrementHighlight" wire:keydown.arrow-up="decrementHighlight" wire:keydown.enter.prevent="addTreatment" wire:keydown.tab="addTreatment" wire:blur="clearTreatments" placeholder="Please search for any treatment" value="{{ $selectedTreatment }}">

        @error('selectedTreatments')
         <span class="invalid-feedback">{{ $message }}</span>
        @enderror

    </div>


    @if (!empty($treatments) && strlen($selectedTreatment) > 0)
        <div class="card shadow-lg mt-2">
            <div class="card-body">
                <ul style="list-style: none;">
                    @forelse ($treatments as $index => $treatment)
                        <li class="mt-1{{ $highlightIndex === $index ? 'highlight' : '' }}">{{ $treatment->item }} ( {{$treatment->atccode3 }})
                            <i class="mt-2 ml-2 bi bi-plus-circle text-primary" wire:click.prevent="addTreatment({{ $index }})"></i>
                        </li>
                    @empty
                        <li>No results</li>
                    @endforelse
                </ul>
            </div>
        </div>
    @endif

    <div class="ml-5">
        <table class="table table-responsive-md table-bordered mt-5">
            <thead>
                <tr>
                    <th>Treatments</th>
                    <th>Max Permitted</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($selectedTreatments as $index => $treatment)
                    <tr>
                        <td>{{ $treatment['name'] }}</td>
                        <td>
                            <input class="form-control  @error('selectedTreatments.'.$index.'.max_permitted') is-invalid @enderror" type="number" wire:model.defer="selectedTreatments.{{ $index }}.max_permitted" min="0" value="{{ $treatment['max_permitted'] }}">

                            @error('selectedTreatments.'.$index.'.max_permitted')
                              <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </td>
                        <td>
                            <i class="bi bi-trash text-danger" wire:click.prevent="removeTreatment({{ $index }})"></i>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="text-center mb-5">
    <button class="btn btn-primary mt-5" type="submit" >Update Rule</button>
</div>

         </div>
    </form>
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
