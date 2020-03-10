<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StaffDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('staff_id');
            $table->integer('company_id');
            $table->timestamps();
            $table->integer('created_id');
            $table->integer('updated_id');
            $table->string('tel_country');
            $table->string('tel_1');
            $table->string('tel_2');
            $table->string('fax');
            $table->string('note');
            $table->smallInteger('retirement_reason');
            $table->smallInteger('retirement_type');
            $table->string('retirement_remarks');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_detail');
    }
}
