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
        Schema::create('officer_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('slug')->unique();
            $table->text('pmi_id');
            $table->string('nik', 25);
            $table->string('name', 50);
            $table->string('born', 50);
            $table->date('date');
            $table->text('alamat');
            $table->string('email')->unique();
            $table->string('telepon', 20);
            $table->string('job', 40);
            $table->string('image')->nullable();
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
        Schema::dropIfExists('officer_data');
    }
};
