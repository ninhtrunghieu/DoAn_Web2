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
            $table->bigIncrements('id')->unsigned();
            $table->timestamps(); // for created_at and updated_at
            $table->string('name', 1000)->nullable();
            $table->string('email', 1000)->nullable();
            $table->string('phone', 10)->nullable();
            $table->string('address', 1000)->nullable();
            $table->integer('status');
            $table->integer('total');
            $table->integer('payments');
            $table->integer('cusId');
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
