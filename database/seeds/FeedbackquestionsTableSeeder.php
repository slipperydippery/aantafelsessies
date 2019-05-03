<?php

use App\Feedbackquestion;
use Illuminate\Database\Seeder;

class FeedbackquestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$question_one = new Feedbackquestion();
    	$question_one->scanmodel_id = 1;
    	$question_one->order = 1;
    	$question_one->title = 'Waren de vragen duidelijk?';
    	$question_one->body = 'Kun je een algemene indruk geven van hoe duidelijk je de vragen vond?';
    	$question_one->save();


    	$question_two = new Feedbackquestion();
    	$question_two->scanmodel_id = 1;
    	$question_two->order = 2;
    	$question_two->title = 'Hoe gebruiksvriendelijk was de Digitale Gesprekshulp?';
    	$question_two->body = 'Kun je een algemene indruk geven van hoe gebruiksvriendelijk je de Digitale Gesprekshulp vond??';
    	$question_two->save();


    	$question_three = new Feedbackquestion();
    	$question_three->scanmodel_id = 1;
    	$question_three->order = 3;
    	$question_three->title = 'Zou je de Digitale Gesprekshulp aanraden?';
    	$question_three->body = 'Kun je een aangeven hoe groot de kans is dat je de Digitale Gesprekshulp zou aanraden aan een ander?';
    	$question_three->save();
    }
}
