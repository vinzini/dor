<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Company extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('created_id')->nullable();
            $table->integer('updated_id')->nullable();
            $table->string('name');
            $table->string('kana_name')->nullable();
            $table->smallInteger('is_active');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->integer('first_month');
            $table->integer('week_start_day');
            $table->string('day_closing_time');
            $table->string('timezone');
            $table->integer('tce_name_type')->nullable();
            $table->string('locale');
            $table->string('currency_code');
            $table->integer('currency_position');
            $table->integer('currency_scale');
            $table->string('user_code')->nullable();
            $table->smallInteger('is_first_login');
            $table->smallInteger('is_leadming_coordinated');
            $table->smallInteger('share_task_flg');
            $table->smallInteger('sync_google_task_flg');
            $table->string('customer_code')->nullable();
            $table->smallInteger('staff_recorder_flg');
            $table->smallInteger('other_visible_flg');
            $table->string('country_cd');
            $table->smallInteger('is_payming');
            $table->smallInteger('is_early_extra_time_active');
            $table->smallInteger('is_extra_time_active');
            $table->integer('management_unit')->nullable();
            $table->smallInteger('agree_prescribed_legal_work')->nullable();
            $table->smallInteger('agree_prescribed_non_legal_work')->nullable();
            $table->smallInteger('agree_prescribed_legal_prescribed_holiday_work');
            $table->smallInteger('agree_prescribed_non_legal_prescribed_holiday_work');
            $table->smallInteger('agree_non_prescribed_prescribed_holiday_work');
            $table->smallInteger('agree_non_prescribed_legal_prescribed_holiday_work');
            $table->smallInteger('agree_non_prescribed_non_legal_prescribed_holiday_work');
            $table->smallInteger('agree_prescribed_legal_legal_holiday_work');
            $table->smallInteger('agree_prpescribed_non_legal_legal_holiday_work');
            $table->smallInteger('agree_non_prescribed_legal_holiday_work');
            $table->smallInteger('agree_non_prescribed_legal_legal_holiday_work');
            $table->smallInteger('agree_non_prescribed_non_legal_legal_holiday_work');
            $table->smallInteger('staff_recorder_get_position_flg');
            $table->smallInteger('ip_permission_flg');
            $table->jsonb('time_slot_wage_weeks')->nullable();
            $table->smallInteger('substitute_holiday_unit');
            $table->smallInteger('is_budget');
            $table->smallInteger('is_use_variable_working');
            $table->string('input_form')->nullable();
            $table->smallInteger('permit_staff_modify_form');
            $table->integer('settlement_management_id')->nullable();
            $table->smallInteger('view_mode');
            $table->smallInteger('office_hours_task_flg');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company');
    }
}
