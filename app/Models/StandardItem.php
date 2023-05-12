<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StandardItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'ins_com_code',
        'ins_item_code',
        'item_old',
        'rx_item_name',
        'item',
        'item_old_current',
        'MOLECULE',
        'generic_name',
        'MOLECULE_SORTED_NO_SPACE',
        'IMS_ID',
        'IMS_MOLECULE',
        'atccode1',
        'atccode2',
        'atccode3',
        'atccode4',
        'top_level_therapy_area',
        'mid_level_therapy_area',
        'best_brand_int',
        'brand_owner_int',
        'dosage_form',
        'typeofdrug',
        'typeofdrug_id',
        'service',
        'service_class',
        'service_new',
        'other_cartegory',
        'ins_company',
        'memonics',
        'maincartegory',
        'subcartegory',
        'maincategory_code',
        'subcartegory_code',
        'price',
        'rx_item_name_new',
        'other_category_new',
        'pack_size',
        'review_status',
        'refill_no',
        'refill',
        'review_user',
        'approve_user',
        'drug_legal_status',
        'restriction_status',
        'gender',
        'specialist',
        'maximum_dose',
        'age',
        'visit_type',
        'abbreviation',
        'entered_time',
        'approved_time',
        'rx_item_code',
        'benefit_group',
        'chronic',
        'acute',
        'storage_condition',
        'narcotic_status',
    ];

    public function adjudications()
    {
        return $this->hasMany(Adjudication::class);
    }
}
