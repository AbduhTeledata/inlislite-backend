<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            // $table->string('auth_key')->nullable();
            // $table->string('password_hash')->nullable();
            // $table->string('password_reset_token')->nullable();
            // $table->bigInteger('status')->nullable();
            // $table->string('PhotoUrl')->nullable();
            // $table->string('Fullname');
            // $table->string('EmailAddress')->unique();
            // $table->bigInteger('IsActive')->nullable();
            // $table->string('SesID')->nullable();
            // $table->datetime('MaxDateSesID')->nullable();
            // $table->string('ActivationCode')->nullable();
            // $table->bigInteger('LoginAttemp')->nullable();
            // $table->datetime('LastSubmitLogin')->nullable();
            // $table->datetime('LastSuccess')->nullable();
            // $table->bigInteger('Department_id')->nullable();
            // $table->bigInteger('Branch_id')->nullable();
            // $table->bigInteger('Role_id');
            // $table->bigInteger('IsCanResetUserPassword')->nullable();
            // $table->bigInteger('IsCanResetMemberPassword')->nullable();
            // $table->bigInteger('IsAdvanceEntryCatalog')->nullable();
            // $table->bigInteger('IsAdvanceEntryCollection')->nullable();
            // $table->bigInteger('CreateBy')->nullable();
            // $table->datetime('CreateDate')->nullable();
            // $table->string('CreateTerminal')->nullable();
            // $table->bigInteger('UpdateBy')->nullable();
            // $table->datetime('UpdateDate')->nullable();
            // $table->string('UpdateTerminal')->nullable();
            // $table->datetime('KillLastUploadDate')->nullable();
          
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
