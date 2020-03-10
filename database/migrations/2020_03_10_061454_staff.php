<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Staff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id');
            $table->timestamps();
            $table->integer('created_id');
            $table->integer('updated_id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('last_kana_name');
            $table->string('first_kana_name');
            $table->string('employee_code');
            $table->string('password');
            $table->string('salt');
            $table->string('mail');
            $table->string('card_no');
            $table->integer('gender');
            $table->date('hire_date');
            $table->date('pto_hire_date');
            $table->date('birth_date');
            $table->string('locale');
            $table->string('username');
            $table->string('nickname');
            $table->date('retirement_date');
            $table->string('password_token');
            $table->timestamp('password_token_expire');
            $table->smallInteger('sync_google_task_flg');
            $table->string('photo_key');
            $table->smallInteger('is_support');
            $table->smallInteger('guide_flg');
            $table->smallInteger('login_failed_count');
            $table->timestamp('lock_date_time');
            $table->string('middle_name');
            $table->string('title');
            $table->string('input_form');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
