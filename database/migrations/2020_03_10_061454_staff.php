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
            $table->increments('id');
            $table->integer('company_id');
            $table->timestamps();
            $table->integer('created_id')->nullable();
            $table->integer('updated_id')->nullable();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('last_kana_name')->nullable();
            $table->string('first_kana_name')->nullable();
            $table->string('employee_code')->nullable();
            $table->string('password')->nullable();
            $table->string('salt');
            $table->string('mail')->nullable();
            $table->string('card_no')->nullable();
            $table->integer('gender');
            $table->date('hire_date')->nullable();
            $table->date('pto_hire_date')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('locale')->nullable();
            $table->string('username');
            $table->string('nickname')->nullable();
            $table->date('retirement_date')->nullable();
            $table->string('password_token')->nullable();
            $table->timestamp('password_token_expire')->nullable();
            $table->smallInteger('sync_google_task_flg');
            $table->string('photo_key')->nullable();
            $table->smallInteger('is_support');
            $table->smallInteger('guide_flg');
            $table->smallInteger('login_failed_count');
            $table->timestamp('lock_date_time')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('title')->nullable();
            $table->string('input_form')->nullable();
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
