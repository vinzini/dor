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
            $table->bigIncrements('id');
            $table->integer('company_id');
            $table->timestamps();
            $table->integer('created_id');
            $table->integer('updated_id');
            $table->integer('company_class');
            $table->integer('company_class_position');
            $table->string('region_cd');
            $table->string('zip_code');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('address_3');
            $table->string('address_4');
            $table->string('tel_country');
            $table->string('tel_1');
            $table->string('tel_2');
            $table->string('fax');
            $table->string('mail');
            $table->string('url');
            $table->integer('founding_year_month');
            $table->decimal('capital',19,4);
            $table->integer('regular_staff_number');
            $table->integer('part_time_staff_number');
            $table->string('contact_last_name');
            $table->string('contact_first_name');
            $table->string('contact_last_kana_name');
            $table->string('contact_first_kana_name');
            $table->string('contact_mail');
            $table->string('contact_tel');
            $table->string('ceo_name');
            $table->integer('transportation');
            $table->integer('time_station');
            $table->double('distance_station',20,4);
            $table->double('lat',20,4);
            $table->double('lon',20,4);
            $table->string('note');
            $table->string('contact_middle_name');
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
