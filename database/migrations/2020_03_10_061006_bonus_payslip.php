<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BonusPayslip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bonus_payslip', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('staff_id');
            $table->integer('company_id');
            $table->integer('number_of_bonus_times');
            $table->decimal('total_payment',19,4);
            $table->decimal('total_deduction',19,4);
            $table->decimal('taxable_adjustment_amount',19,4)->nullable();
            $table->decimal('nontaxable_adjustment_amount',19,4)->nullable();
            $table->decimal('net_payment',19,4);
            $table->smallInteger('decide_status');
            $table->smallInteger('tax_calculated');
            $table->timestamps();
            $table->integer('created_id')->nullable();
            $table->integer('updated_id')->nullable();
            $table->integer('bonus_payment_date_id');
            $table->decimal('basic_bonus',19,4)->nullable();
            $table->smallInteger('transfer_to_multi_account');
            $table->decimal('transfer_amount_account_one',19,4)->nullable();
            $table->decimal('transfer_amount_account_two',19,4)->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bonus_payslip');
    }
}
