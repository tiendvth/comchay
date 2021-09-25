<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('districtId');
            $table->string('wardId');
            $table->integer('userId')->nullable();
            $table->double('totalPrice');
            $table->string('shipName');
            $table->string('shipPhone');
            $table->string('shipAddress');
            $table->string('note');
            $table->integer('status')->default(\App\Enums\Status::WAITING);
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
        Schema::dropIfExists('orders');
    }
}
