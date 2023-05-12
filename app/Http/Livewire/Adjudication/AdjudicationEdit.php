<?php

namespace App\Http\Livewire\Adjudication;

use App\Models\Disease;
use App\Models\StandardItem;
use App\Models\Adjudication;
use App\Models\DiseaseStg;
use Illuminate\Support\Collection;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class AdjudicationEdit extends Component
{
    public $diseaseId;
    public $diseaseSearch;
    public $selectedDisease, $selectedDiseaseId, $icd10Code;
    public $selectedInvestigations = [];
    public $selectedInvestigation;
    public $selectedTreatments = [];
    public $selectedTreatment;
    public $diseases;
    public $investigations;
    public $treatments;
    public $highlightIndex = 0;
    public $reset;
    public $searchType;

    public function mount($diseaseId)
    {
        $this->searchType = 'icd_10_code';
        $this->diseaseId = $diseaseId;

        $adjudications = Adjudication::where('disease_id', $diseaseId)->get();

        $this->selectedDisease = $adjudications->first()->disease_name;
        $this->selectedDiseaseId = $adjudications->first()->disease_id;

        $this->selectedTreatments = $adjudications
            ->whereNotIn('item_service', ['Laboratory', 'Radiology'])
            ->map(function ($adjudication) {
                return [
                    'id' => $adjudication->id,
                    'name' => $adjudication->item_name,
                    'max_permitted' => $adjudication->max_permitted,
                ];
            })->toArray();

        $this->selectedInvestigations = $adjudications
            ->whereIn('item_service', ['Laboratory', 'Radiology'])
            ->map(function ($adjudication) {
                return [
                    'id' => $adjudication->id,
                    'name' => $adjudication->item_name,
                    'max_permitted' => $adjudication->max_permitted,
                ];
            })->toArray();
    }

        public function render()
        {
            if ($this->searchType === 'icd_10_code') {
                $this->diseases = Disease::where('code', 'like', '%' . $this->selectedDisease . '%')->limit(10)->get();
            } elseif ($this->searchType === 'stg_disease_name') {
                $this->diseases = DiseaseStg::where('tg_disease_name', 'like', '%' . $this->selectedDisease . '%')->limit(10)->get();
            }

            $this->investigations = StandardItem::where(function ($query) {
                $query->where('service', 'like', '%lab%')
                    ->orWhere('service', 'like', '%rad%');
            })
            ->when($this->selectedInvestigation, function ($query, $selectedInvestigation) {
                $query->where('item', 'like', '%' . $selectedInvestigation . '%');
            })
            ->limit(10)
            ->get();

            $this->treatments = StandardItem::where('service', 'not like', '%lab%')
            ->where('service', 'not like', '%rad%')
            ->when($this->selectedTreatment, function ($query, $selectedTreatment) {
                $query->where('item', 'like', '%' . $selectedTreatment . '%');
            })
            ->limit(10)
            ->get();

            return view('livewire.adjudication.adjudication-edit');
        }

        public function selectDisease($index = null)
        {
            if ($index !== null && isset($this->diseases[$index])) {
                $selectedDisease = $this->diseases[$index];

                if ($this->searchType === 'icd_10_code') {
                    $this->selectedDiseaseId = $selectedDisease->id;
                    $this->selectedDisease = $selectedDisease->disease;
                    $adjudication = Adjudication::where('disease_id', $this->selectedDiseaseId)
                        ->where('disease_search_type', $this->searchType)
                        ->first();
                    if ($adjudication) {
                        $this->icd10Code = $adjudication->icd_10_code;
                    } else {
                        $this->icd10Code = $selectedDisease->code;
                    }
                } else if ($this->searchType === 'stg_disease_name') {
                    $disease = DiseaseStg::where('tg_disease_name', $selectedDisease->tg_disease_name)->first();
                    if ($disease) {
                        $this->selectedDiseaseId = $disease->id;
                        $this->selectedDisease = $disease->tg_disease_name;
                        $adjudication = Adjudication::where('disease_id', $this->selectedDiseaseId)
                            ->where('disease_search_type', $this->searchType)
                            ->first();
                        if ($adjudication) {
                            $this->icd10Code = $adjudication->icd_10_code;
                        } else {
                            $this->icd10Code = $selectedDisease->icd_10_Code;

                        }
                    }

                }
            }

            $this->diseases = [];
            $this->highlightIndex = 0;
        }


    public function selectInvestigation($index = null)
    {
        if ($index !== null && isset($this->investigations[$index])) {
            $selectedInvestigation = [
                'id' => $this->investigations[$index]->id,
                'name' => $this->investigations[$index]->item,
                'max_permitted' => null,
            ];

            // Check if the investigation is already in the selected investigations array
            if (!in_array($selectedInvestigation, $this->selectedInvestigations)) {
                $this->selectedInvestigations[] = $selectedInvestigation;
            }
        }

        $this->investigations = [];
        $this->highlightIndex = 0;
    }

    public function selectTreatment($index = null)
    {
        if ($index !== null && isset($this->treatments[$index])) {
            $selectedTreatment = [
                'id' => $this->treatments[$index]->id,
                'name' => $this->treatments[$index]->item,
                'max_permitted' => null,
            ];

            // Check if the treatment is already in the selected treatments array
            if (!in_array($selectedTreatment, $this->selectedTreatments)) {
                $this->selectedTreatments[] = $selectedTreatment;
            }
        }

        $this->treatments = [];
        $this->highlightIndex = 0;
    }

    public function addInvestigation($index = null)
{
    if ($index !== null && isset($this->investigations[$index])) {
        $selectedInvestigation = [
            'id' => $this->investigations[$index]->id,
            'name' => $this->investigations[$index]->item,
            'max_permitted' => null,
        ];

        // Check if the investigation is already in the selected investigations array
        if (!in_array($selectedInvestigation, $this->selectedInvestigations)) {
            $this->selectedInvestigations[] = $selectedInvestigation;
        }

        $this->selectedInvestigation = ''; // Clear the search input
    }


}

public function addTreatment($index = null)
{
    if ($index !== null && isset($this->treatments[$index])) {
        $selectedTreatment = [
            'id' => $this->treatments[$index]->id,
            'name' => $this->treatments[$index]->item . ' (' . $this->treatments[$index]->atccode3 . ')',
            'max_permitted' => null,
        ];

        // Check if the Treatment is already in the selected Treatments array
        if (!in_array($selectedTreatment, $this->selectedTreatments)) {
            $this->selectedTreatments[] = $selectedTreatment;
        }

        $this->selectedTreatment = ''; // Clear the search input

    }

}


    public function incrementHighlight()
    {
        if (count($this->diseases) > 0) {
            if ($this->highlightIndex === count($this->diseases) - 1) {
                $this->highlightIndex = 0;
                return;
            }

            $this->highlightIndex++;
        }

        if (count($this->investigations) > 0) {
            if ($this->highlightIndex === count($this->investigations) - 1) {
                $this->highlightIndex = 0;
                return;
            }

            $this->highlightIndex++;
        }

        if (count($this->treatments) > 0) {
            if ($this->highlightIndex === count($this->treatments) - 1) {
                $this->highlightIndex = 0;
                return;
            }

            $this->highlightIndex++;
        }
    }

    public function decrementHighlight()
    {
        if (count($this->diseases) > 0) {
            if ($this->highlightIndex === 0) {
                $this->highlightIndex = count($this->diseases) - 1;
                return;
            }

            $this->highlightIndex--;
        }

        if (count($this->investigations) > 0) {
            if ($this->highlightIndex === 0) {
                $this->highlightIndex = count($this->investigations) - 1;
                return;
            }

            $this->highlightIndex--;
        }

        if (count($this->treatments) > 0) {
            if ($this->highlightIndex === 0) {
                $this->highlightIndex = count($this->treatments) - 1;
                return;
            }

            $this->highlightIndex--;
        }
    }

    public function clearDiseases()
    {
        $this->diseases = [];
        $this->highlightIndex = 0;

    }

    public function clearInvestigations()
    {
        $this->investigations = [];
        $this->highlightIndex = 0;
    }

    public function clearTreatments()
    {
        $this->treatments = [];
        $this->highlightIndex = 0;
    }

    public function removeTreatment($index)
    {
        $treatment = $this->selectedTreatments[$index];
        if (isset($treatment['id'])) {
            $adjudicationTreatment = Adjudication::find($treatment['id']);
            if ($adjudicationTreatment) {
                $adjudicationTreatment->delete();
            }
        }
        unset($this->selectedTreatments[$index]);
    }


    public function removeInvestigation($index)
    {
        $investigation = $this->selectedInvestigations[$index];
        if (isset($investigation['id'])) {
            $adjudicationInvestigation = Adjudication::find($investigation['id']);
            if ($adjudicationInvestigation) {
                $adjudicationInvestigation->delete();
            }
        }
        unset($this->selectedInvestigations[$index]);
    }


protected $rules = [
    'selectedDisease' => 'required',
    'selectedInvestigations' => 'required|array|min:1',
    'selectedInvestigations.*.max_permitted' => 'required|integer|min:0',
    'selectedTreatments' => 'required|array|min:1',
    'selectedTreatments.*.max_permitted' => 'required|integer|min:0',

];

public function update()
{
    $this->validate();
    if (empty($this->selectedInvestigations)) {
        $this->addError('selectedInvestigations', 'At least one investigation is required.');
    }

    if (empty($this->selectedTreatments)) {
        $this->addError('selectedTreatments', 'At least one treatment is required.');
    }

    $disease = null;
    if ($this->searchType === 'icd_10_code') {
        $disease = Disease::find($this->selectedDiseaseId);
    } elseif ($this->searchType === 'stg_disease_name') {
        $disease = DiseaseStg::find($this->selectedDiseaseId);
    }
    if (!$disease) {
        $this->emit('adjudicationEvent', ['type' => 'error', 'message' => 'Disease is not found.']);
        return;
    }

    $this->selectedDisease = $this->searchType === 'icd_10_code' ? $disease->disease : ($this->searchType === 'stg_disease_name' ? $disease->tg_disease_name : null);

    $this->icd10Code = $this->searchType === 'icd_10_code' ? $disease->code : ($this->searchType === 'stg_disease_name' ? $disease->icd_10_Code : null);

    $saveSuccessful = true;

    foreach ($this->selectedInvestigations as $investigation) {
        $item = StandardItem::where('item', $investigation['name'])->first();
        $adjudication = Adjudication::where('item_name', $investigation['name'])
            ->where('disease_id', $this->selectedDiseaseId)
            ->first();

        if (!$adjudication) {
            $item = StandardItem::find($investigation['id']);
            $adjudication = new Adjudication();
            $adjudication->disease_name = $this->selectedDisease;
            $adjudication->icd_10_code = $this->icd10Code;
            $adjudication->disease_id = $this->selectedDiseaseId;
            $adjudication->disease_search_type = $this->searchType;
            $adjudication->item_name = $investigation['name'];
            $adjudication->ins_item_code = $item->ins_item_code;
            $adjudication->item_id = $item->id;
            $adjudication->atccode1 = $item->atccode1;
            $adjudication->atccode2 = $item->atccode2;
            $adjudication->atccode3 = $item->atccode3;
            $adjudication->atccode4 = $item->atccode4;
            $adjudication->item_service = $item->service;
            $adjudication->item_service_class = $item->service_class;
            $adjudication->max_permitted = $investigation['max_permitted'];
        } else {

            $adjudication->icd_10_code = $this->icd10Code;
            $adjudication->max_permitted = $investigation['max_permitted'];
        }

        if (!$adjudication->save()) {
            $saveSuccessful = false;
        }
    }
  foreach ($this->selectedTreatments as $treatment) {
    $item = StandardItem::where('item', $treatment['name'])->first();
    $adjudication = Adjudication::where('item_name', $treatment['name'])
        ->where('disease_id', $this->selectedDiseaseId)
        ->first();

    if (!$adjudication) {
        $item = StandardItem::find($treatment['id']);
        $adjudication = new Adjudication();
        $adjudication->disease_name = $this->selectedDisease;
        $adjudication->icd_10_code = $this->icd10Code;
        $adjudication->disease_id = $this->selectedDiseaseId;
        $adjudication->disease_search_type = $this->searchType;
        $adjudication->item_name = $treatment['name'];
        $adjudication->item_id = $item->id;
        $adjudication->atccode1 = $item->atccode1;
        $adjudication->atccode2 = $item->atccode2;
        $adjudication->atccode3 = $item->atccode3;
        $adjudication->atccode4 = $item->atccode4;
        $adjudication->item_service = $item->service;
        $adjudication->item_service_class = $item->service_class;
        $adjudication->ins_item_code = $item->ins_item_code;
    } else {

        $adjudication->icd_10_code = $this->icd10Code;
        $adjudication->max_permitted = $treatment['max_permitted'];
    }

    if (!$adjudication->save()) {
        $saveSuccessful = false;
    }
}


if ($saveSuccessful) {
    $this->reset();
    $message = 'Adjudication updated successfully.';
    $this->emit('adjudicationEvent', ['type' => 'success', 'message' => $message ]);
} else {
    $message = 'Error occurred while saving adjudication.';
    $this->emit('adjudicationEvent', ['type' => 'error', 'message' => $message ]);
}

}

}
