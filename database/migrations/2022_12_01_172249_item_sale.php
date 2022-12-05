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
        Schema::create('Item_sale', function (Blueprint $table) {
            $table->increments('Id_item_sale');
            $table->integer('Amount');
            $table->double('Total', 8, 4);
            $table->timestamps();
            $table->unsignedInteger('Sale_id');
            $table->foreign('Sale_id')->references('Id_sale')->on('Sale')->onDelete('cascade');
            $table->unsignedInteger('Item_id');
            $table->foreign('Item_id')->references('Id_item')->on('Item')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Item_sale');
    }
};
