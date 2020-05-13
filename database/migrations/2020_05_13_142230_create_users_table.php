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
            $table->id('user_id');
            $table->string('user_username')->unique();
            $table->string('user_password');
            $table->string('user_firstname');
            $table->string('user_lastname');
            $table->tinyInteger('user_status',0);
            $table->tinyInteger('user_remove_status',0);

            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->index(['user_id','user_username']);
            $table->engine = 'InnoDB';
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
