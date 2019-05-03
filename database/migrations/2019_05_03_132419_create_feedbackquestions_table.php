<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackquestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbackquestions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order')->unsigned();
            $table->integer('scanmodel_id')->unsigned();
            $table->foreign('scanmodel_id')->references('id')->on('scanmodels')->onDelete('cascade');
            $table->string('title');
            $table->text('body')->nullable();
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
        Schema::dropIfExists('feedbackquestions');
    }
}
