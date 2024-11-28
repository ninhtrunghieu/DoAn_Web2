<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email', 250)->unique();
            $table->string('name', 200)->nullable();
            $table->string('password', 200);
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}

