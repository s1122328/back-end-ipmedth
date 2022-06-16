<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bestellingen', function (Blueprint $table) {
            $table->increments('bestel_id');
            $table->string("drank");
            $table->string("categorie");
            $table->integer("aantal");
            $table->integer("user_id")->unsigned();
            $table->foreign("user_id")->references("id")->on("users")->onDelete('restrict');
            $table->string('bestelling');
            $table->string('besteld_door');
            $table->string("status");
            $table->float("prijs");
            $table->float("totaal_prijs");
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
        Schema::dropIfExists('bestellingen');
    }
}
