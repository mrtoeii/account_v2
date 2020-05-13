<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
            $table->id('account_id');
            $table->string('type');
            $table->string('list');
            $table->double('amount',8,2);
            $table->date('date');
            $table->text('description')->nullable();
            $table->dateTime('created_at', 0);
            $table->dateTime('updated_at', 0);
            $table->string('username');
          
            $table->tinyInteger('remove_status', 0);
            $table->index(['account_id','username']);   
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            
            $table->engine = 'InnoDB';  
            
            $table->foreign('username')->references('user_username')->on('users')->onUpdate('cascade')->onDelete('restrict');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account');
    }
}
