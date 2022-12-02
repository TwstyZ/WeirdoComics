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
        Schema::create('Sale', function (Blueprint $table) {
            $table->increments('Id_sale');
            $table->timestamps();
            $table->unsignedInteger('Seller_id');
            $table->foreign('Seller_id')->references('Id_seller')->on('Seller')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Sale');
    }
};
