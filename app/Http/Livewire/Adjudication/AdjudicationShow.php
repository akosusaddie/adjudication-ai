<?php

namespace App\Http\Livewire\Adjudication;

use App\Models\Disease;
use App\Models\Adjudication;
use App\Models\DiseaseStg;
use Livewire\Component;

class AdjudicationShow extends Component
{
    public $diseaseName;
    public $disease;
    public $investigations = [];
    public $treatments = [];

    public function mount($diseaseId)
{
    $diseaseName = Adjudication::where('disease_id', $diseaseId)
        ->pluck('disease_name')
        ->first();

    $this->diseaseName = $diseaseName;
    $disease = Adjudication::where('disease_id', $diseaseId)->first();
    $this->disease = $disease;

    $adjudications = Adjudication::where('disease_id', $diseaseId)->get();

    foreach ($adjudications as $adjudication) {
        if ($adjudication->item_service === 'Laboratory' || $adjudication->item_service === 'Radiology') {
            $this->investigations[] = (object) $adjudication->toArray();
        } else {
            $this->treatments[] = (object) $adjudication->toArray();
        }
    }
}


    public function render()
    {
        return view('livewire.adjudication.adjudication-show');
    }
}
