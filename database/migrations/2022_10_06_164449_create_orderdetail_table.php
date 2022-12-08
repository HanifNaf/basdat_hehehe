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
        Schema::create('sandwich_details', function (Blueprint $table) {
            $table->id();
            $table->integer('sandwich');
            $table->integer('bread');
            $table->integer('size');
            $table->json('extras');
            $table->json('veggies');
            $table->json('sauces');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sandwich_details');
    }
};
