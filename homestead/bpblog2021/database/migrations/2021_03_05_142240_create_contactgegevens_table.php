<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactgegevensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactgegevens', function (Blueprint $table) {
            $table->id();
            $table->string('Voornaam');
            $table->string('Achternaam');
            $table->string('Email');
            $table->string('Telefoonnummer');
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
        Schema::dropIfExists('contactgegevens');
    }
}
