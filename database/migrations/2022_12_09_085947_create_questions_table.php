<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('question_one_id');
            $table->string('answer1');
            $table->string('answer2');
            $table->string('answer3');
            $table->string('answer4');
            $table->string('answer5');
            $table->string('answer6');
            $table->string('answer7');
            $table->string('answer8');
            $table->string('answer9');
            $table->string('answer10');
            $table->string('answer11');
            $table->string('answer12');
            $table->string('answer13');
            $table->string('answer14');
            $table->string('answer15');
            $table->string('answer16');
            $table->string('answer17');
            $table->string('answer18');
            $table->string('answer19');
            $table->string('answer20');
            $table->string('answer21');
            $table->string('answer22');
            $table->string('answer23');
            $table->string('answer24');
            $table->string('answer25');
            $table->string('answer26');
            $table->string('answer27');
            $table->string('answer28');
            $table->string('answer29');
            $table->string('answer30');
            $table->string('answer31');
            $table->string('answer32');
            $table->string('answer33');
            $table->string('answer34');
            $table->string('answer35');
            $table->string('answer36');
            $table->string('answer37');
            $table->string('answer38');
            $table->string('answer39');
            $table->string('answer40');
            $table->string('answer41');
            $table->foreignId('user_id');
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
        Schema::dropIfExists('questions');
    }
};
