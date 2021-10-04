<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_roles', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('news_id');
            $table->foreign('news_id')->references('id')->on('news');
            $table->unsignedBigInteger('role_code');
            $table->foreign('role_code')->references('code')->on('roles');

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
        Schema::dropIfExists('news_roles');
    }
}
