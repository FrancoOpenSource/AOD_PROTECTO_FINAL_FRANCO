<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('name',    200);
            $table->string('shortName', 50);
            $table->string('slogan',   150);
            $table->string('phone',    15)->nullable();
            $table->string('email',    100)->nullable();
            $table->string('copyrigth', 200);
            $table->string('version',   15);
            $table->string('address',  250);
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
        Schema::dropIfExists('information');
    }
}
