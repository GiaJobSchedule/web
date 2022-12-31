<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\UserGender;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 75)->nullable(true);
            $table->string('last_name', 25)->nullable(true);
            $table->string('email', 255);
            $table->string('password', 255);
            $table->enum('gender', ['man', 'woman'])->nullable(true);
            $table->boolean('active')->default(true);
            $table->boolean('del')->default(false);
            $table->timestamps();
            $table->unsignedBigInteger('creator');
            $table->unsignedBigInteger('updator');
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
};
