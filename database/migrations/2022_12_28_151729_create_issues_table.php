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
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('assignee')->nullable(true);
            $table->unsignedBigInteger('project_id');
            $table->string('title', 100);
            $table->text('content')->nullable(true);
            $table->dateTimeTz('start_date')->nullable(true);
            $table->dateTimeTz('due_date')->nullable(true);
            $table->float('estimate_time', 4, 1)->nullable(true);
            $table->timestamps();
            $table->unsignedBigInteger('creator');
            $table->unsignedBigInteger('updator');

            $table->foreign('assignee')->references('id')->on('users');
            $table->foreign('project_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issues');
    }
};
