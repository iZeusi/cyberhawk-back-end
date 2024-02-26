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
        Schema::create('component_inspections', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('component_id');
            $table->unsignedInteger('grade_id');
            $table->unsignedInteger('inspection_id');
            $table->foreign('component_id')->references('id')->on('components');
            $table->foreign('grade_id')->references('id')->on('grades');
            $table->foreign('inspection_id')->references('id')->on('inspections');
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
        Schema::dropIfExists('component_inspections');
    }
};
