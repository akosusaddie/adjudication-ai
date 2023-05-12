<?php

namespace App\Http\Controllers\Adjudication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Disease;
use App\Models\Adjudication;
use App\Models\DiseaseStg;

class AdjudicationController extends Controller
{

     public function dashboard()
    {
        return view('adjudication.dashboard');
    }


    public function index()
    {
        return view('adjudication.index');
    }


    public function create()
    {
        return view('adjudication.create');
    }


    public function show($diseaseId)
    {
        $adjudication = Adjudication::where('disease_id', $diseaseId)->firstOrFail();
    if($adjudication->disease_search_type == 'icd_10_code') {
        $disease = Disease::find($diseaseId);
    } else {
        $disease = DiseaseStg::find($diseaseId);
    }

    return view('adjudication.show', ['disease' => $disease, 'adjudication' => $adjudication]);
    }


public function edit($diseaseId)
{
    $adjudication = Adjudication::where('disease_id', $diseaseId)->firstOrFail();
    if($adjudication->disease_search_type == 'icd_10_code') {
        $disease = Disease::find($diseaseId);
    } else {
        $disease = DiseaseStg::find($diseaseId);
    }

    return view('adjudication.edit', ['disease' => $disease, 'adjudication' => $adjudication]);
}



    public function update(Request $request,  $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
