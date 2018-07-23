<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_title');
            $table->string('type');
            $table->string('category');
            $table->text('description');
            $table->string('image');
            $table->string('url');
            $table->date('starting_date');
            $table->date('ending_date');
            $table->string('remarks')->nullable();
            $table->string('assign_to');
            $table->string('assign_by')->nullable();
            $table->string('team_member');
            $table->string('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
