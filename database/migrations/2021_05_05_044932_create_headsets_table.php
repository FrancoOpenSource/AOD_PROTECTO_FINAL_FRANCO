<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadsetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headsets', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('brand', 100);
            $table->string('model', 50);
            $table->string('color', 50);
            $table->string('serialNumber', 50);
            $table->string('type', 30);
            $table->integer('year');
            $table->string('rgb', 20);
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
        Schema::dropIfExists('headsets');
    }
}
