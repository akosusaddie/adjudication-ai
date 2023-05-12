<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;

    protected $fillable = [
        'disease',
        'code',
        'disease_group_id',
        'disease_group_code',
        'block_code',
        'chapter_id',
        'block_id',
        'level',
        'place_of_class',
        'type_of_code',
        'code_1',
        'code_2',
        'field_11',
        'field_12',
        'field_13',
        'field_14',
    ];

    public function adjudications()
    {
        return $this->hasMany(Adjudication::class);
    }
}
