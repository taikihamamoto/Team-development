<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submission', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('main_title');
            $table->string('title_1');
            $table->string('text_1');
            $table->string('title_2');
            $table->string('text_2');
            $table->string('title_3');
            $table->string('text_3');
            $table->string('image');
            $table->string('image_path');
            $table->integer('money_goals');
            $table->dateTime('reception_deadline');
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
        Schema::dropIfExists('submission');
    }
}
