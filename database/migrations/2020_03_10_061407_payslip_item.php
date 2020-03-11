<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PayslipItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payslip_item', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('payslip_id');
            $table->integer('company_id');
            $table->timestamps();
            $table->integer('created_id')->nullable();
            $table->integer('updated_id')->nullable();
            $table->string('name');
            $table->integer('type');
            $table->decimal('amount',19,4)->nullable();
            $table->string('cust_val')->nullable();
            $table->integer('order_no');
            $table->integer('taxable');
            $table->integer('insurance');
            $table->integer('reduce');
            $table->integer('allowance_deduction_id')->nullable();
            $table->smallInteger('edited');
            $table->string('label')->nullable();
            $table->integer('custom_target_1')->nullable();
            $table->integer('custom_target_2')->nullable();
            $table->integer('custom_target_3')->nullable();
            $table->integer('custom_target_4')->nullable();
            $table->integer('custom_target_5')->nullable();
            $table->integer('custom_type_1')->nullable();
            $table->decimal('custom_amount_1',19,4)->nullable();
            $table->integer('custom_target_6')->nullable();
            $table->decimal('custom_amount_2',19,4)->nullable();
            $table->integer('ad_parent_id')->nullable();
            $table->integer('custom_type_2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payslip_item');
    }
}
