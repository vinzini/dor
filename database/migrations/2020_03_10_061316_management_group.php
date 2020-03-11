<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ManagementGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_group', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->timestamps();
            $table->integer('created_id')->nullable();
            $table->integer('updated_id')->nullable();
            $table->string('name');
            $table->string('short_name')->nullable();
            $table->string('user_code')->nullable();
            $table->integer('order_no');
            $table->smallInteger('is_active');
            $table->string('tag')->nullable();
            $table->smallInteger('is_company');
            $table->string('timezone')->nullable();
            $table->smallInteger('share_task_flg');
            $table->smallInteger('is_leadming_coordinated');
            $table->smallInteger('is_default');
            $table->string('country_cd')->nullable();
            $table->string('uuid')->nullable();
            $table->smallInteger('withdrawal_permit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('management_group');
    }
}
