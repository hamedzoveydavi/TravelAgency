<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('CompanyName_FA',50)->nallable(false);
            $table->string('CompanyName_EN',50)->nallable(false);
            $table->string('ManagerName_FA',50)->nallable(false);
            $table->string('ManagerName_EN',50);
            $table->string('Register_No',10);
            $table->string('Company_Email',100);
            $table->string('Company_Logo',100);
            $table->string('Company_Address',191);              
            $table->string('Tel',14);
            $table->string('Fax',14);
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
        Schema::dropIfExists('companies');
    }
}
