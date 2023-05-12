<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adjudication extends Model
{
    use HasFactory;

    protected $fillable = [
        'disease_name',
        'icd_10_code',
        'disease_id',
        'item_name',
        'ins_item_code',
        'item_id',
        'atccode1',
        'atccode2',
        'atccode3',
        'atccode4',
        'item_service',
        'item_service_class',
        'max_permitted',
    ];

    public function disease()
    {
        return $this->belongsTo(Disease::class);
    }

    public function standardItem()
    {
        return $this->belongsTo(StandardItem::class);
    }
}
