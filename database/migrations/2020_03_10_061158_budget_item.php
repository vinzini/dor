<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BudgetItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budget_item', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('management_group_id');
            $table->integer('company_id');
            $table->timestamps();
            $table->integer('created_id');
            $table->integer('updated_id');
            $table->string('budget_code');
            $table->string('name');
            $table->string('identifier');
            $table->integer('order_no');
            $table->smallInteger('is_active');
            $table->smallInteger('editable');
            $table->smallInteger('scaletype');
            $table->smallInteger('inputable');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budget_item');
    }
}
