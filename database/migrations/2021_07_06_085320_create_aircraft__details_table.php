<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAircraftDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aircraft__details', function (Blueprint $table) {
            $table->id();
            $table->string('Type_Name',10)->nallable(false);
            $table->string('Class_Name',10)->nallable(false);
            $table->integer('Total_Chair')->nallable(false);
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
        Schema::dropIfExists('aircraft__details');
    }
}
