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
        Schema::create('Item_order', function (Blueprint $table) {
            $table->increments('Id_item-order');
            $table->integer('Amount');
            $table->double('Total', 8, 4);
            $table->timestamps();
            $table->unsignedInteger('Order_id');
            $table->foreign('Order_id')->references('Id_order')->on('Order')->onDelete('cascade');
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
