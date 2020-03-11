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
            $table->increments('id');
            $table->integer('staff_id');
            $table->integer('main_group_id')->nullable();
            $table->integer('management_group_id');
            $table->integer('shift_plan_id')->nullable();
            $table->integer('company_id');
            $table->timestamps();
            $table->integer('created_id')->nullable();
            $table->integer('updated_id')->nullable();
            $table->date('work_date');
            $table->integer('work_month');
            $table->string('attendance_code');
            $table->timestamp('start_plan')->nullable();
            $table->timestamp('end_plan')->nullable();
            $table->timestamp('start_time_clock')->nullable();
            $table->timestamp('end_time_clock')->nullable();
            $table->timestamp('start_work')->nullable();
            $table->timestamp('end_work')->nullable();
            $table->timestamp('start_work_round')->nullable();
            $table->timestamp('end_work_round')->nullable();
            $table->timestamp('start_early_extra')->nullable();
            $table->timestamp('end_early_extra')->nullable();
            $table->timestamp('start_early_extra_round')->nullable();
            $table->timestamp('end_early_extra_round')->nullable();
            $table->timestamp('start_extra')->nullable();
            $table->timestamp('end_extra')->nullable();
            $table->timestamp('start_extra_round')->nullable();
            $table->timestamp('end_extra_round')->nullable();
            $table->timestamp('start_all')->nullable();
            $table->timestamp('end_all')->nullable();
            $table->timestamp('start_all_round')->nullable();
            $table->timestamp('end_all_round')->nullable();
            $table->smallInteger('time_round');
            $table->string('start_time_clock_source')->nullable();
            $table->string('end_time_clock_source')->nullable();
            $table->jsonb('rest_times')->nullable();
            $table->smallInteger('edit_rest');
            $table->integer('work_time');
            $table->integer('rest_time');
            $table->integer('late_time')->nullable();
            $table->integer('early_time')->nullable();
            $table->integer('late_edit');
            $table->integer('early_edit');
            $table->integer('late_cancel');
            $table->integer('early_cancel');
            $table->smallInteger('is_edit');
            $table->smallInteger('personal_approval');
            $table->timestamp('personal_approval_date')->nullable();
            $table->smallInteger('group_approval');
            $table->integer('group_approval_id')->nullable();
            $table->timestamp('group_approval_date')->nullable();
            $table->smallInteger('main_group_approval');
            $table->integer('main_group_approval_id')->nullable();
            $table->timestamp('main_group_approval_date')->nullable();
            $table->smallInteger('company_approval');
            $table->integer('company_approval_id')->nullable();
            $table->timestamp('company_approval_date')->nullable();
            $table->jsonb('others_approval_list')->nullable();
            $table->integer('calendar_date_type');
            $table->integer('work_date_type');
            $table->string('timezone')->nullable();
            $table->integer('utc_offset')->nullable();
            $table->timestamp('order_key');
            $table->smallInteger('unsolved_plan');
            $table->timestamp('auto_time_clock_start')->nullable();
            $table->timestamp('auto_time_clock_end')->nullable();
            $table->string('note')->nullable();
            $table->integer('attendance_status')->nullable();
            $table->timestamp('extra_updated_at')->nullable();
            $table->integer('before_notify_status')->nullable();
            $table->timestamp('before_notify_time')->nullable();
            $table->integer('late_notify_status')->nullable();
            $table->timestamp('late_notify_time')->nullable();
            $table->integer('early_notify_status')->nullable();
            $table->integer('extra_notify_status')->nullable();
            $table->timestamp('extra_notify_time')->nullable();
            $table->timestamp('work_notify_time')->nullable();
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
