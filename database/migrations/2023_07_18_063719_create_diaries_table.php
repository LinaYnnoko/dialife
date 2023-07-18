<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diaries', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->timestamps();
/*          $table->integer('user_id')->unsigned()->nullable();*/

            $table->string('height');
            $table->string('weight');
            $table->string('blood_pressure');
            $table->string('glucose_level');
            $table->string('cholesterol');

            $table->boolean('isPrivate')->default(false);
            $table->foreignId('user_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diaries');
    }
}
