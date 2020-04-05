<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propose', function (Blueprint $table) {
            $table->bigIncrements('propose_id');
            $table->string('project_name');
            $table->string('username');
            $table->date('project_date');
            $table->date('end_date');
            $table->dateTime('submit_date');
            $table->date('close_date')->nullable();
            $table->text('location');
            $table->integer('year');
            $table->integer('expenditure');
            $table->string('status');
            $table->integer('budget')->nullable();
            $table->integer('bud_used')->nullable();
            $table->integer('balarce')->nullable();
            $table->text('email_status')->nullable();
            $table->text('d_propose')->nullable();
            $table->text('d_summary')->nullable();
            $table->text('d_payment')->nullable();
            $table->integer('user_id');
            $table->integer('category_id');
            $table->string('department_id');
            $table->softDeletes();
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
        Schema::dropIfExists('propose');
    }
}
