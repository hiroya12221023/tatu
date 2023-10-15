<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('quiz_questions', function (Blueprint $table) {
    $table->id();
    $table->text('question');
    $table->text('answer')->nullable()->default(null); // デフォルトの値を設定し、NULLを許容する
    $table->text('openai_response');
    $table->timestamps();
});
    }

    public function down()
    {
        Schema::dropIfExists('quiz_questions');
    }
}