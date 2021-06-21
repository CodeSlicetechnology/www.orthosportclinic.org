<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeSectionOnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_section_ones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('main_title', 50);
            $table->string('sub_title_1', 100)->nullable();
            $table->string('sub_title_2', 100)->nullable();
            $table->text('image_path');
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_section_ones');
    }
}
