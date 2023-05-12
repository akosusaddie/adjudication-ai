<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiseaseStg extends Model
{
    use HasFactory;

    protected $table = 'diseases_stg';

    protected $fillable = [
        'icd_10_DiseaseID',
        'icd_10_Code',
        'icd_10_Disease',
        'icd_10_DiseaseGroupID',
        'icd_10_DiseaseGroupCode',
        'icd_10_BlockCode',
        'tg_disease_name',
        'tg1',
        'tg2',
        'tg3',
        'tg4',
    ];
}
