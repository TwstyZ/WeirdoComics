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
        Schema::create('Item', function (Blueprint $table) {
            $table->increments('Id_item');
            $table->string('Name');
            $table->string('Type');
            $table->integer('Edition')->nullable();
            $table->text('Description')->nullable();
            $table->string('Brand');
            $table->integer('Amount');
            $table->double('Price_buy', 8, 4);
            $table->double('Price_sell', 8, 4)->nullable();
            $table->dateTime('Admission_date');
            $table->string('Image', 500)->default('https://iconmonstr.com/wp-content/g/gd/makefg.php?i=../releases/preview/7.3.0/png/iconmonstr-cube-lined.png&r=0&g=0&b=0');
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
        Schema::dropIfExists('Item');
    }
};
