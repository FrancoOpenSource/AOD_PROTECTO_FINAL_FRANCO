<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('brand', 100);
            $table->string('model', 50);
            $table->string('color', 50);
            $table->string('serialNumber', 50);
            $table->string('carRegistration', 12)->nullable();
            $table->tinyInteger('numberOfDoors');
            $table->tinyInteger('numberOfSeats');
            $table->integer('mileage');
            $table->tinyInteger('cylinderCapacity');
            $table->text('description');
            $table->string('comment')->nullable();
            $table->tinyInteger('available')->default(1);
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
        Schema::dropIfExists('vehicles');
    }
}
