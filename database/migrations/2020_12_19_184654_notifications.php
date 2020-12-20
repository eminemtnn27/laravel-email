<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Notifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('notifications', function (Blueprint $table){
      $table->increments('id');
      $table->string('name')->unique();
      $table->string('last_notification')->strtotime();//json formatında veriler görünecek onu ayarla kaç gün sonra kaybolacak kalan süre görünecek
      $table->integer('created_at')->unsigned();
      $table->integer('updated_at')->unsigned();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
