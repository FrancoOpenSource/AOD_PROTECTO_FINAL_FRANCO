<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chairs', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('brand', 100);
            $table->string('model', 50);
            $table->string('color',15);
            $table->string('rgb' ,50);
            $table->string('material', 50);
            $table->integer('year');
            $table->integer('weight');
            $table->string('fixed', 50);
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
        Schema::dropIfExists('chairs');
    }
}
