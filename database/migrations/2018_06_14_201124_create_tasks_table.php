<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

Schema::enableForeignKeyConstraints();


class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->text('body');
            $table->integer('status');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('milestone_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('milestone_id')->references('id')->on('milestones');
            $table->timestamp('duedate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
