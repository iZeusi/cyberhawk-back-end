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
        Schema::create('wind_farms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location')->nullable();
            $table->string('contact_number')->nullable();
            $table->unsignedInteger('owner_id')->nullable();
            $table->foreign('owner_id')->references('id')->on('users');
            $table->softDeletes();
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
        Schema::dropIfExists('wind_farms');
    }
};
