<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Provider', function (Blueprint $table) {
            $table->increments('Id_provider');
            $table->string('Name');
            $table->string('Address');
            $table->string('Country');
            $table->string('Contact');
            $table->bigInteger('Cellphone');
            $table->bigInteger('Telephone');
            $table->string('Email');
            $table->string('Image', 500)->default('https://iconmonstr.com/wp-content/g/gd/makefg.php?i=../releases/preview/2012/png/iconmonstr-user-5.png&r=0&g=0&b=0');
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
        Schema::dropIfExists('Provider');
    }
};
