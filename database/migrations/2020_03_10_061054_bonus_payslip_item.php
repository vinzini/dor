<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BonusPayslipItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bonus_payslip_item', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bonus_payslip_id');
            $table->integer('company_id');
            $table->string('name');
            $table->integer('type');
            $table->integer('taxable');
            $table->decimal('amount',19,4);
            $table->string('label');
            $table->integer('company_bonus_item_id')->nullable();
            $table->timestamps();
            $table->integer('created_id')->nullable();
            $table->integer('updated_id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bonus_payslip_item');
    }
}
