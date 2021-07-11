<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefundRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refund_rules', function (Blueprint $table) {
            $table->id();
            $table->string('PassengerType',3)->nallable(false);  
            $table->string('PeriodOfTime',3)->nallable(false);  
            $table->string('TypeOfTime',3)->nallable(false); 
            $table->string('Penalty',3)->nallable(false);  
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
        Schema::dropIfExists('refund_rules');
    }
}
