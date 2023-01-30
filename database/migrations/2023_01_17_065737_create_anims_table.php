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
        Schema::create('anims', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('textBig');
            $table->string('textPre');
            $table->string('animText');
            $table->string('animText2');
            $table->string('textBigL');
            $table->string('textBigR');
            $table->text('textAL');
            $table->text('textAR');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anims');
    }
};
