<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductOwnersTable extends Migration
{
    public function up()
    {
        Schema::create('product_owners', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_owners');
    }
}
