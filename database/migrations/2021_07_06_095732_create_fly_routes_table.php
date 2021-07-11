<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlyRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fly_routes', function (Blueprint $table) {
            $table->id();
            $table->string('SourceFa')->nallable(false);
            $table->string('SourceEN')->nallable(false);
            $table->string('Source_Symbol',3)->nallable(false);
            $table->string('DestinationFa')->nallable(false);
            $table->string('DestinationEN')->nallable(false);
            $table->string('Destination_Symbol',3)->nallable(false);   
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
        Schema::dropIfExists('fly_routes');
    }
}
