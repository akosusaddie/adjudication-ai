<?php

namespace App\Http\Livewire\Adjudication;
use App\Models\Adjudication;
use Livewire\Component;

class AdjudicationsTable extends Component
{
    public $investigations = [];

    public function mount()
    {
        $this->investigations = Adjudication::whereIn('item_service', ['Laboratory', 'Radiology'])
            ->get();
    }


    public function deleteRecord($recordId, $recordType)
    {
        if ($recordType === 'adjudication') {
            Adjudication::where('disease_id', $recordId)->delete();
        } else {
            Adjudication::find($recordId)->delete();
        }

        $this->emit('recordDeleted');
    }



    public function render()
    {
        $diseases = Adjudication::select('adjudications.id', 'adjudications.disease_id', 'adjudications.disease_name', 'adjudications.icd_10_code', 'adjudications.disease_search_type')
        ->whereIn('adjudications.id', function($query) {
            $query->selectRaw('MAX(id)')
                ->from('adjudications')
                ->groupBy('disease_id');
        })
        ->get();



        return view('livewire.adjudication.adjudications-table', [
            'diseases' => $diseases,
        ]);
    }
}
