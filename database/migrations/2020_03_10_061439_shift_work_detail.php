<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShiftWorkDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shift_work_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shift_work_id');
            $table->integer('staff_id');
            $table->integer('company_id');
            $table->timestamps();
            $table->integer('created_id')->nullable();
            $table->integer('updated_id')->nullable();
            $table->integer('labor_condition_id');
            $table->integer('fixed_working_time');
            $table->integer('overtime');
            $table->integer('night_time');
            $table->integer('night_overtime');
            $table->integer('legal_overtime');
            $table->integer('non_legal_overtime');
            $table->integer('legal_night_overtime');
            $table->integer('non_legal_night_overtime');
            $table->integer('early_extra_time');
            $table->integer('extra_time');
            $table->jsonb('time_list')->nullable();
            $table->jsonb('total_time_list')->nullable();
            $table->integer('pay_type');
            $table->decimal('commutation_allowance',19,4)->nullable();
            $table->smallInteger('transportation_auto');
            $table->smallInteger('transportation_edit')->nullable();
            $table->decimal('transportation_expenses',19,4)->nullable();
            $table->decimal('fixed_labor_cost',19,4);
            $table->decimal('overtime_labor_cost',19,4);
            $table->decimal('labor_cost',19,4);
            $table->jsonb('labor_cost_list',19,4)->nullable();
            $table->jsonb('allowances_deductions',19,4)->nullable();
            $table->double('start_time_lat',20,4)->nullable();
            $table->double('start_time_lon',20,4)->nullable();
            $table->double('end_time_lat',20,4)->nullable();
            $table->double('end_time_lon',20,4)->nullable();
            $table->integer('fixed_working_hours_day')->nullable();
            $table->decimal('base_wage',19,4)->nullable();
            $table->decimal('allowance',19,4)->nullable();
            $table->decimal('deduction',19,4)->nullable();
            $table->smallInteger('variable_week_no');
            $table->decimal('paid_leave_allowance',19,4)->nullable();
            $table->smallInteger('daily_wage_given')->nullable();
            $table->decimal('overtime_base_wage',19,4)->nullable();
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shift_work_detail');
    }
}
