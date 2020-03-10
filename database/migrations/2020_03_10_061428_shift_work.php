<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShiftWork extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shift_work', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('staff_id');
            $table->integer('main_group_id');
            $table->integer('management_group_id');
            $table->integer('shift_plan_id');
            $table->integer('company_id');
            $table->timestamps();
            $table->integer('created_id');
            $table->integer('updated_id');
            $table->date('work_date');
            $table->integer('work_month');
            $table->string('attendance_code');
            $table->timestamp('start_plan');
            $table->timestamp('end_plan');
            $table->timestamp('start_time_clock');
            $table->timestamp('end_time_clock');
            $table->timestamp('start_work');
            $table->timestamp('end_work');
            $table->timestamp('start_work_round');
            $table->timestamp('end_work_round');
            $table->timestamp('start_early_extra');
            $table->timestamp('end_early_extra');
            $table->timestamp('start_early_extra_round');
            $table->timestamp('end_early_extra_round');
            $table->timestamp('start_extra');
            $table->timestamp('end_extra');
            $table->timestamp('start_extra_round');
            $table->timestamp('end_extra_round');
            $table->timestamp('start_all');
            $table->timestamp('end_all');
            $table->timestamp('start_all_round');
            $table->timestamp('end_all_round');
            $table->smallInteger('time_round');
            $table->string('start_time_clock_source');
            $table->string('end_time_clock_source');
            $table->jsonb('rest_times');
            $table->smallInteger('edit_rest');
            $table->integer('work_time');
            $table->integer('rest_time');
            $table->integer('late_time');
            $table->integer('early_time');
            $table->integer('late_edit');
            $table->integer('early_edit');
            $table->integer('late_cancel');
            $table->integer('early_cancel');
            $table->smallInteger('is_edit');
            $table->smallInteger('personal_approval');
            $table->timestamp('personal_approval_date');
            $table->smallInteger('group_approval');
            $table->integer('group_approval_id');
            $table->timestamp('group_approval_date');
            $table->smallInteger('main_group_approval');
            $table->integer('main_group_approval_id');
            $table->timestamp('main_group_approval_date');
            $table->smallInteger('company_approval');
            $table->integer('company_approval_id');
            $table->timestamp('company_approval_date');
            $table->jsonb('others_approval_list');
            $table->integer('calendar_date_type');
            $table->integer('work_date_type');
            $table->string('timezone');
            $table->integer('utc_offset');
            $table->timestamp('order_key');
            $table->smallInteger('unsolved_plan');
            $table->timestamp('auto_time_clock_start');
            $table->timestamp('auto_time_clock_end');
            $table->string('note');
            $table->integer('attendance_status');
            $table->timestamp('extra_updated_at');
            $table->integer('before_notify_status');
            $table->timestamp('before_notify_time');
            $table->integer('late_notify_status');
            $table->timestamp('late_notify_time');
            $table->integer('early_notify_status');
            $table->integer('extra_notify_status');
            $table->timestamp('extra_notify_time');
            $table->timestamp('work_notify_time');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shift_work');
    }
}
