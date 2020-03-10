<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Payslip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payslip', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('staff_id');
            $table->integer('employment_type_id');
            $table->integer('company_id');            
            $table->timestamps();
            $table->integer('created_id');
            $table->integer('updated_id');
            $table->integer('payday_type');
            $table->integer('payment_ym');
            $table->date('payment_date');
            $table->integer('work_ym');
            $table->date('work_start');
            $table->date('work_end');
            $table->string('company_code');
            $table->string('company_name');
            $table->string('employee_code');
            $table->decimal('net_payment',19,4);
            $table->string('note');
            $table->smallInteger('decide_status');
            $table->smallInteger('payment_flg');
            $table->smallInteger('retroactive_calculation');
            $table->integer('calculation_status');
            $table->smallInteger('edited');
            $table->integer('previous_payslip_id');
            $table->decimal('retroactive_adjusted');
            $table->decimal('retroactive_health_insurance',19,4);
            $table->decimal('retroactive_welfare_pension',19,4);
            $table->decimal('retroactive_employee_insurance',19,4);
            $table->smallInteger('retroactive_transfer');
            $table->integer('retroactive_transfer_id');
            $table->decimal('adjustment_amount',19,4);
            $table->decimal('total_payment',19,4);
            $table->decimal('insurance_payment',19,4);
            $table->decimal('taxable_payment',19,4);
            $table->decimal('total_deduction',19,4);
            $table->decimal('retroactive_care_insurance',19,4);
            $table->smallInteger('import_flag');
            $table->string('payroll_method');
            $table->decimal('retroactive_adjustment_amount_1',19,4);
            $table->decimal('retroactive_adjustment_amount_2',19,4);
            $table->decimal('retroactive_adjustment_amount_3',19,4);
            $table->decimal('retroactive_adjustment_amount_4',19,4);
            $table->decimal('retroactive_adjustment_amount_5',19,4);
            $table->decimal('retroactive_adjustment_amount_6',19,4);
            $table->decimal('retroactive_adjustment_amount_7',19,4);
            $table->decimal('retroactive_adjustment_amount_8',19,4);
            $table->decimal('retroactive_adjustment_amount_9',19,4);
            $table->decimal('retroactive_adjustment_amount_10',19,4);
            $table->decimal('overtime_taxable_payment',19,4);
            $table->smallInteger('transfer_to_multi_account');
            $table->decimal('transfer_amount_account_one',19,4);
            $table->decimal('transfer_amount_account_two',19,4);
            $table->smallInteger('edited_transfer_amount_account_two');
            $table->decimal('custom_amount_1',19,4);
            $table->decimal('custom_amount_2',19,4);
            $table->decimal('custom_amount_3',19,4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payslip');
    }
}
