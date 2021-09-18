<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('mst_user')) {
        Schema::create('mst_user', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('email', 256)->comment('email')->unique();
          $table->string('password', 512)->comment('password');
          $table->string('phone', 15)->comment('phone number')->nullable();
          $table->integer('auth_flg')->comment('0: Administrator, 1: Normal User');
          $table->string('remember_token', 256)->nullable();
          $table->timestamps();
        });
        DB::statement("ALTER TABLE `mst_user` ADD COLUMN `state_flg` TINYINT(1) AFTER `auth_flg`;");
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_user');
    }
}
