<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionloansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collectionloans', function (Blueprint $table) {
            $table->increments('ID');
            $table->bigInteger('CollectionCount')->nullable();
            $table->bigInteger('LateCount')->nullable();
            $table->bigInteger('ExtendCount')->nullable();
            $table->bigInteger('LoanCount')->nullable();
            $table->bigInteger('ReturnCount')->nullable();
            $table->double('Member_id');
            $table->bigInteger('Branch_id')->nullable();
            $table->bigInteger('CreateBy')->nullable();
            $table->datetime('CreateDate')->nullable();
            $table->string('CreateTerminal')->nullable();
            $table->bigInteger('UpdateBy')->nullable();
            $table->datetime('UpdateDate')->nullable();
            $table->string('UpdateTerminal')->nullable();
            $table->datetime('KillLastUploadDate')->nullable();
            $table->bigInteger('LocationLibrary_id')->nullable();
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
        Schema::dropIfExists('collectionloans');
    }
}
