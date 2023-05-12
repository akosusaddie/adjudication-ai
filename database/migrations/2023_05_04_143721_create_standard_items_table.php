<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStandardItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standard_items', function (Blueprint $table) {
            $table->id();
            $table->string('ins_com_code')->nullable();
            $table->string('ins_item_code')->nullable();
            $table->string('item_old')->nullable();
            $table->string('rx_item_name')->nullable();
            $table->string('item')->nullable();
            $table->string('item_old_current')->nullable();
            $table->string('MOLECULE')->nullable();
            $table->string('generic_name')->nullable();
            $table->string('MOLECULE_SORTED_NO_SPACE')->nullable();
            $table->string('IMS_ID')->nullable();
            $table->string('IMS_MOLECULE')->nullable();
            $table->string('atccode1')->nullable();
            $table->string('atccode2')->nullable();
            $table->string('atccode3')->nullable();
            $table->string('atccode4')->nullable();
            $table->string('top_level_therapy_area')->nullable();
            $table->string('mid_level_therapy_area')->nullable();
            $table->string('best_brand_int')->nullable();
            $table->string('brand_owner_int')->nullable();
            $table->string('dosage_form')->nullable();
            $table->string('typeofdrug')->nullable();
            $table->string('typeofdrug_id')->nullable();
            $table->string('service')->nullable();
            $table->string('service_class')->nullable();
            $table->string('service_new')->nullable();
            $table->string('other_cartegory')->nullable();
            $table->string('ins_company')->nullable();
            $table->string('memonics')->nullable();
            $table->string('maincartegory')->nullable();
            $table->string('subcartegory')->nullable();
            $table->string('maincategory_code')->nullable();
            $table->string('subcartegory_code')->nullable();
            $table->string('price')->nullable();
            $table->string('rx_item_name_new')->nullable();
            $table->string('other_category_new')->nullable();
            $table->string('pack_size')->nullable();
            $table->string('review_status')->nullable();
            $table->string('refill_no')->nullable();
            $table->string('refill')->nullable();
            $table->string('review_user')->nullable();
            $table->string('approve_user')->nullable();
            $table->string('drug_legal_status')->nullable();
            $table->string('restriction_status')->nullable();
            $table->string('gender')->nullable();
            $table->string('specialist')->nullable();
            $table->string('maximum_dose')->nullable();
            $table->string('age')->nullable();
            $table->string('visit_type')->nullable();
            $table->string('abbreviation')->nullable();
            $table->string('entered_time')->nullable();
            $table->string('approved_time')->nullable();
            $table->string('rx_item_code')->nullable();
            $table->string('benefit_group')->nullable();
            $table->string('chronic')->nullable();
            $table->string('acute')->nullable();
            $table->string('storage_condition')->nullable();
            $table->string('narcotic_status')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('standard_items');
    }

}
