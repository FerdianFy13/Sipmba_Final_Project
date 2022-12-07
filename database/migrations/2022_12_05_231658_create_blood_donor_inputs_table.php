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
        Schema::create('blood_donor_inputs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('nik', 25);
            $table->string('name', 45);
            $table->string('born', 45);
            $table->date('day');
            $table->integer('age');
            $table->string('job');
            $table->string('call', 24);
            $table->string('place', 55);
            $table->rememberToken();
            // $table->string('token', 16);
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
        Schema::dropIfExists('blood_donor_inputs');
    }
};
