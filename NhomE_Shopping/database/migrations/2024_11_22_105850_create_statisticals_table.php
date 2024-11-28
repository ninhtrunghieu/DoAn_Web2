<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticalsTable extends Migration
{
    public function up()
    {
        Schema::create('statisticals', function (Blueprint $table) {
            $table->id();
            $table->string('order_date', 100);
            $table->string('sales', 200);
            $table->string('profit', 200);
            $table->integer('quantity');
            $table->integer('total_order');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('statisticals');
    }
}

