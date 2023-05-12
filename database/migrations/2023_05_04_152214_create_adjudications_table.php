<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdjudicationsTable extends Migration
{
    public function up()
    {
        Schema::create('adjudications', function (Blueprint $table) {
            $table->id();
            $table->string('disease_name');
            $table->string('icd_10_code')->nullable();
            $table->string('disease_search_type')->nullable();
            $table->unsignedBigInteger('disease_id')->nullable();
            $table->foreign('disease_id')->references('id')->on('diseases')->onDelete('set null');
            $table->string('item_name');
            $table->string('ins_item_code')->nullable();
            $table->unsignedBigInteger('item_id')->nullable();
            $table->foreign('item_id')->references('id')->on('standard_items')->onDelete('set null');
            $table->string('atccode1')->nullable();
            $table->string('atccode2')->nullable();
            $table->string('atccode3')->nullable();
            $table->string('atccode4')->nullable();
            $table->string('item_service')->nullable();
            $table->string('item_service_class')->nullable();
            $table->integer('max_permitted')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('adjudications');
    }
}
