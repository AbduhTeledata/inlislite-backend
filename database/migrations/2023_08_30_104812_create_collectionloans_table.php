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
            $table->increments('id');
            $table->bigInteger('CollectionCount')->nullable();
            $table->bigInteger('LateCount')->nullable();
            $table->bigInteger('ExtendCount');
            $table->bigInteger('LoanCount')->nullable();
            $table->bigInteger('ReturnCount')->nullable();
            $table->double('Member_id');
            $table->bigInteger('Branch_id')->nullable();
            $table->bigInteger('CreatedBy')->nullable();
            $table->string('UpdateTerminal', 100)->nullable();
            // $table->timestamps('KillLastUploadDate');
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
