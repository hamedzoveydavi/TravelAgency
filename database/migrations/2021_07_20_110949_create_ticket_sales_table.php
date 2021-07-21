<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_sales', function (Blueprint $table) {
            $table->id();
            $table->integer('FlyProgram_id');
            $table->string('ref');
            $table->tinyinteger('PassengerType_id');
            $table->string('Name');
            $table->string('Family');
            $table->integer('Nationality');
            $table->string('National_Code',10)->nullable();
            $table->string('Passport_No')->nullable();
            $table->string('Passport_ExpireDate')->nullable();
            $table->string('Dateofbirth_FA',10)->nullable();
            $table->string('Dateofbirth_EN',10)->nullable();
            $table->tinyinteger('Gender');
            $table->integer('Salesusername_id');
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
        Schema::dropIfExists('ticket_sales');
    }
}
