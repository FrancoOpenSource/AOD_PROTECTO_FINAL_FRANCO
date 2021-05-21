<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tvs', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('brand', 100);
            $table->string('model', 50);
            $table->integer('inch');
            $table->integer('hz');
            $table->string('type', 30);
            $table->integer('year');
            $table->string('system',30);
            $table->string('wifi', 20);
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
        Schema::dropIfExists('tvs');
    }
}
