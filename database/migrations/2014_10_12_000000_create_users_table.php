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
            $table->increments('id');

            $table->string('givenName');
            $table->string('familyName');
            $table->string('username');
            $table->string('email')->unique();
            $table->boolean('isAdmin')->default(0);

            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });


        Schema::create('summoners', function (Blueprint $table) {
            $table->increments('id');

            $table->string('username');
            $table->string('region');

            $table->unsignedInteger('summoner_id');
            $table->timestamps();
            $table->foreign('summoner_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
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
