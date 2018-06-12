<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('instantie_id')->unsigned();
            $table->foreign('instantie_id')->references('id')->on('instanties')->onDelete('cascade');
            $table->integer('inventarisatie_id')->unsigned();
            $table->foreign('inventarisatie_id')->references('id')->on('inventarisaties')->onDelete('cascade');
            $table->string('collaboration')->nullable();
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
        Schema::dropIfExists('partners');
    }
}
