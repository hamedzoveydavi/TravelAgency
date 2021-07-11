<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgencyDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agency_discounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Sub_Agency_id');
            $table->foreign('Sub_Agency_id')->refrences('id')->on('sub_agencies')->onDelete('cascade');
            $table->smallinteger('Discount');
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
        Schema::dropIfExists('agency__discounts');
    }
}
