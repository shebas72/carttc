<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('License')->nullable();
            $table->string('Model')->nullable();
            $table->string('Year')->nullable();
            $table->string('Chasis_number')->nullable();
            $table->string('Bank_Name')->nullable();
            $table->string('Color')->nullable();
            $table->string('Condition')->nullable();
            $table->string('Key_Available')->nullable();
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
        Schema::dropIfExists('banks');
    }
}
