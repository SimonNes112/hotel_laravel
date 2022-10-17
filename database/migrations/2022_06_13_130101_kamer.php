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
        Schema::create('kamers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("naam_kamer");
            $table->string("foto_kamer");
            $table->integer("nummer_kamer");
            $table->string("oppervlakte_kamer");
            $table->string("minibar_kamer");
            $table->integer("persoonen_kamer");
            $table->string("bad_kamer");
            $table->double("prijs_kamer");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
