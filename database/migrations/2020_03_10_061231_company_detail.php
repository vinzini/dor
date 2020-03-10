<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanyDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->timestamps();
            $table->integer('created_id')->nullable();
            $table->integer('updated_id')->nullable();
            $table->integer('company_class');
            $table->integer('company_class_position')->nullable();
            $table->string('region_cd');
            $table->string('zip_code');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('address_3');
            $table->string('address_4')->nullable();
            $table->string('tel_country')->nullable();
            $table->string('tel_1');
            $table->string('tel_2')->nullable();
            $table->string('fax')->nullable();
            $table->string('mail')->nullable();
            $table->string('url')->nullable();
            $table->integer('founding_year_month')->nullable();
            $table->decimal('capital',19,4)->nullable();
            $table->integer('regular_staff_number');
            $table->integer('part_time_staff_number')->nullable();
            $table->string('contact_last_name');
            $table->string('contact_first_name');
            $table->string('contact_last_kana_name')->nullable();
            $table->string('contact_first_kana_name')->nullable();
            $table->string('contact_mail')->nullable();
            $table->string('contact_tel')->nullable();
            $table->string('ceo_name')->nullable();
            $table->integer('transportation')->nullable();
            $table->integer('time_station')->nullable();
            $table->double('distance_station',20,4)->nullable();
            $table->double('lat',20,4)->nullable();
            $table->double('lon',20,4)->nullable();
            $table->string('note')->nullable();
            $table->string('contact_middle_name')->nullable();
            $table->string('approved_user');
            $table->timestamp('approval_date');
        });
    }






    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_detail');
    }
}
