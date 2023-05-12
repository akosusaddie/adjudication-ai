<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiseasesTable extends Migration
{
    public function up()
    {
        Schema::create('diseases', function (Blueprint $table) {
            $table->id();
            $table->text('disease')->nullable();
            $table->string('code')->nullable();
            $table->string('disease_group_id')->nullable();
            $table->string('disease_group_code')->nullable();
            $table->string('block_code')->nullable();
            $table->string('chapter_id')->nullable();
            $table->string('block_id')->nullable();
            $table->string('level')->nullable();
            $table->string('place_of_class')->nullable();
            $table->string('type_of_code')->nullable();
            $table->string('code_1')->nullable();
            $table->string('code_2')->nullable();
            $table->string('field_11')->nullable();
            $table->string('field_12')->nullable();
            $table->string('field_13')->nullable();
            $table->string('field_14')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('diseases');
    }
}
