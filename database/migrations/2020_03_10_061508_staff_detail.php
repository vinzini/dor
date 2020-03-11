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
            $table->increments('id');
            $table->integer('staff_id');
            $table->integer('company_id');
            $table->timestamps();
            $table->integer('created_id')->nullable();
            $table->integer('updated_id')->nullable();
            $table->string('tel_country')->nullable();
            $table->string('tel_1')->nullable();
            $table->string('tel_2')->nullable();
            $table->string('fax')->nullable();
            $table->string('note')->nullable();
            $table->smallInteger('retirement_reason')->nullable();
            $table->smallInteger('retirement_type')->nullable();
            $table->string('retirement_remarks')->nullable();
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
