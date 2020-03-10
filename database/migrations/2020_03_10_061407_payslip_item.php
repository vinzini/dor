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
            $table->bigIncrements('id');
            $table->integer('payslip_id');
            $table->integer('company_id');
            $table->timestamps();
            $table->integer('created_id');
            $table->integer('updated_id');
            $table->string('name');
            $table->integer('type');
            $table->decimal('amount',19,4);
            $table->string('cust_val');
            $table->integer('order_no');
            $table->integer('taxable');
            $table->integer('insurance');
            $table->integer('reduce');
            $table->integer('allowance_deduction_id');
            $table->smallInteger('edited');
            $table->integer('custom_target_1');
            $table->integer('custom_target_2');
            $table->integer('custom_target_3');
            $table->integer('custom_target_4');
            $table->integer('custom_target_5');
            $table->integer('custom_type_1');
            $table->decimal('custom_amount_1',19,4);
            $table->integer('custom_target_6');
            $table->decimal('custom_amount_2',19,4);
            $table->integer('ad_parent_id');
            $table->integer('custom_type_2');
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
