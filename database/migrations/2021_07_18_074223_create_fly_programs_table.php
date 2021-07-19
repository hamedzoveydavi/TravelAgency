<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlyProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fly_programs', function (Blueprint $table) {
            $table->id();
            $table->tinyinteger('FlyType')->nullable(false);
            $table->string('FlydateFA',10)->nullable(false);
            $table->string('FlydateEN' ,10);
            $table->integer('Airlines_id')->nullable(false);
            $table->integer('Route_id')->nullable(false);
            $table->integer('AircraftDetail_id')->nullable(false);
            $table->integer('FlyNo')->nullable(false);
            $table->integer('Price')->nullable(false);
            $table->smallinteger('luggageRules_id');
            $table->smallinteger('ReturnRules_id');
            $table->time('FlyTime_at');
            $table->time('DepartureTime_at'); 
            $table->time('ArrivalTimeLocal_at');
            $table->smallinteger('Chair_avilable');
            $table->tinyinteger('Status');
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
        Schema::dropIfExists('fly_programs');
    }
}
