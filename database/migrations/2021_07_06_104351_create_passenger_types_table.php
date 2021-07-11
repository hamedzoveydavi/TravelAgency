<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassengerTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passenger_types', function (Blueprint $table) {
            $table->id();
            $table->string('PassengerType',3)->nallable(false);   
            $table->smallInteger('From_Age')->nallable(false);    
            $table->smallInteger('To_Age')->nallable(false);     
            $table->smallInteger('Discount')->nallable(false);     
            $table->smallInteger('Status')->nallable(false);     
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
        Schema::dropIfExists('passenger_types');
    }
}
