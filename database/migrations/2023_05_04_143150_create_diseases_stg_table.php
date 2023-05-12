<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiseasesStgTable extends Migration
{
    public function up()
    {
        Schema::create('diseases_stg', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('icd_10_DiseaseID')->nullable();
            $table->string('icd_10_Code', 20)->nullable();
            $table->string('icd_10_Disease', 255)->nullable();
            $table->unsignedInteger('icd_10_DiseaseGroupID')->nullable();
            $table->string('icd_10_DiseaseGroupCode', 255)->nullable();
            $table->string('icd_10_BlockCode', 255)->nullable();
            $table->string('tg_disease_name', 255)->nullable()->unique();
            $table->string('tg1', 255)->nullable();
            $table->string('tg2', 255)->nullable();
            $table->string('tg3', 255)->nullable();
            $table->string('tg4', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('diseases_stg');
    }
}
