<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingPoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricing_policies', function (Blueprint $table) {
            $table->id();
            $table->integer('SeatNo_from')->nallable(false);
            $table->integer('SeatNO_TO')->nallable(false);
            $table->integer('Price_Percentage')->nallable(false);     
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
        Schema::dropIfExists('pricing_policies');
    }
}
