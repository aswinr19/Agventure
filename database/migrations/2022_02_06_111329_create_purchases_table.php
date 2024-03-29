<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('address_id');
            $table->foreignId('card_number')->nullable();
            $table->bigInteger('amount');
            $table->integer('delivery_charge');
            $table->bigInteger('total');
            $table->foreignId('auction_id')->nullable();
            $table->foreignId('soil_test_id')->nullable();
            // $table->foreignId('machine_id')->nullable();
            // $table->foreignId('product_id')->nullable();
            $table->string('payment_method');
            $table->string('status');
            $table->string('order_status');
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
        Schema::dropIfExists('purchases');
    }
}
