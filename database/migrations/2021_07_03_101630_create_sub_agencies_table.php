<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_agencies', function (Blueprint $table) {
            $table->id();
            $table->string('SubAgency_NameFA')->nallable(false);
            $table->string('SubAgency_NameEN')->nallable(false);
            $table->string('SubAgency_ManagerNameFA',50)->nallable(false);
            $table->string('SubAgency_ManagerNameEN',50);
            $table->string('SubAgency_RegisterNo',6);
            $table->string('SubAgency_Email');
            $table->string('SubAgency_Address');
            $table->string('SubAgency_Logo');
            $table->string('SubAgency_Tel',12);
            $table->string('SubAgency_Fax',12);
                 
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_agencies');
    }
}
