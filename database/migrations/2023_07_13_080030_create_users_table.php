<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->timestamps();

            $table->string('first_name');
            $table->string('second_name');
            $table->boolean('gender');
            $table->string('geolocation')->default(null);
            $table->string('email')->unique();
            $table->string('avatar')->default(null);
            $table->date('date_of_birthday');

            $table->string('type_of_diabetes');
            $table->date('date_of_illness');

            $table->boolean('isAdmin')->default(false);

            $table->string('password');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
