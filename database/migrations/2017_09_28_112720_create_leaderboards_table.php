<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaderboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaderboards', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('user_id');
            $table->string('name');
            $table->string('usertype');
            $table->string('college');
            $table->integer('level')->default(1);
            $table->string('profile_avatar')->default('default.jpg');
            $table->bigInteger('attempts')->default(0);
            $table->boolean('blocked')->default(0);
            $table->dateTime('prevlevcompleted_at');
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
        Schema::dropIfExists('leaderboards');
    }
}
