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
        Schema::create('blood_requests', function (Blueprint $table) {
            $table->id();
            $table->string('hospital', 55);
            $table->string('name_request', 55);
            $table->string('name_officer', 55);
            $table->string('call_officer', 55);
            $table->date('date');
            $table->string('time');
            $table->string('sum');
            $table->string('blooda1');
            $table->string('blooda2');
            $table->string('bloodb1');
            $table->string('bloodb2');
            $table->string('bloodc1');
            $table->string('bloodc2');
            $table->string('bloodd1');
            $table->string('bloodd2');
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
        Schema::dropIfExists('blood_requests');
    }
};
