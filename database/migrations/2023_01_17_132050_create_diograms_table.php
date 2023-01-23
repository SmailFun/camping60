<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diograms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('textBig');
            $table->string('textPre');
            $table->string('dio1');
            $table->string('dio2');
            $table->string('dio3');
            $table->string('dio4');
            $table->string('textAL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diograms');
    }
};
