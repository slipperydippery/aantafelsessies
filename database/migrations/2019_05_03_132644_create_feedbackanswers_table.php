<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackanswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbackanswers', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('answer', 3, 1)->nullable();
            $table->text('justification')->nullable();
            $table->integer('scan_id')->unsigned();
            $table->foreign('scan_id')->references('id')->on('scans')->onDelete('cascade');
            $table->integer('feedbackquestion_id')->unsigned();
            $table->foreign('feedbackquestion_id')->references('id')->on('feedbackquestions')->onDelete('cascade');
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
        Schema::dropIfExists('feedbackanswers');
    }
}
