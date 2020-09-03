<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->bigIncrements('id');


            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('uid_phone')->unique()->nullable();

            $table->enum('type', [
                \App\Enums\PersonTypes::USER,
                \App\Enums\PersonTypes::EMPLOYEE,
                \App\Enums\PersonTypes::ADMIN,
            ]);
            $table->string('firebase_token')->nullable();
            $table->string('profile_picture')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('persons');
    }
}

