<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BudgetHourlyNumber extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budget_hourly_number', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('management_group_id');
            $table->integer('company_id');
            $table->timestamps();
            $table->integer('created_id');
            $table->integer('updated_id');
            $table->integer('budget_item_id');
            $table->date('work_date');
            $table->decimal('budget_number_h0',19,4);
            $table->decimal('budget_number_h1',19,4);
            $table->decimal('budget_number_h2',19,4);
            $table->decimal('budget_number_h3',19,4);
            $table->decimal('budget_number_h4',19,4);
            $table->decimal('budget_number_h5',19,4);
            $table->decimal('budget_number_h6',19,4);
            $table->decimal('budget_number_h7',19,4);
            $table->decimal('budget_number_h8',19,4);
            $table->decimal('budget_number_h9',19,4);
            $table->decimal('budget_number_h10',19,4);
            $table->decimal('budget_number_h11',19,4);
            $table->decimal('budget_number_h12',19,4);
            $table->decimal('budget_number_h13',19,4);
            $table->decimal('budget_number_h14',19,4);
            $table->decimal('budget_number_h15',19,4);
            $table->decimal('budget_number_h16',19,4);
            $table->decimal('budget_number_h17',19,4);
            $table->decimal('budget_number_h18',19,4);
            $table->decimal('budget_number_h19',19,4);
            $table->decimal('budget_number_h20',19,4);
            $table->decimal('budget_number_h21',19,4);
            $table->decimal('budget_number_h22',19,4);
            $table->decimal('budget_number_h23',19,4);
            $table->decimal('cost_number_h0',19,4);
            $table->decimal('cost_number_h1',19,4);
            $table->decimal('cost_number_h2',19,4);
            $table->decimal('cost_number_h3',19,4);
            $table->decimal('cost_number_h4',19,4);
            $table->decimal('cost_number_h5',19,4);
            $table->decimal('cost_number_h6',19,4);
            $table->decimal('cost_number_h7',19,4);
            $table->decimal('cost_number_h8',19,4);
            $table->decimal('cost_number_h9',19,4);
            $table->decimal('cost_number_h10',19,4);
            $table->decimal('cost_number_h11',19,4);
            $table->decimal('cost_number_h12',19,4);
            $table->decimal('cost_number_h13',19,4);
            $table->decimal('cost_number_h14',19,4);
            $table->decimal('cost_number_h15',19,4);
            $table->decimal('cost_number_h16',19,4);
            $table->decimal('cost_number_h17',19,4);
            $table->decimal('cost_number_h18',19,4);
            $table->decimal('cost_number_h19',19,4);
            $table->decimal('cost_number_h20',19,4);
            $table->decimal('cost_number_h21',19,4);
            $table->decimal('cost_number_h22',19,4);
            $table->decimal('cost_number_h23',19,4);
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budget_hourly_number');
    }
}
