<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassengerluggageRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passengerluggage_rules', function (Blueprint $table) {
            $table->id();
            $table->smallinteger('NumberOfLuggage')->nallable(false);
            $table->integer('LuggageWeight')->nallable(false);
            $table->smallinteger('NumberOfhandbag')->nallable(false);
            $table->integer('handbagWeight')->nallable(false);
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
        Schema::dropIfExists('passengerluggage_rules');
    }
}
