<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionLoanItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collectionloanitems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CollectionLoan_id');
            $table->dateTime('LoanDate')->nullable();
            $table->dateTime('DueDate')->nullable();
            $table->dateTime('ActualReturn')->nullable();
            $table->bigInteger('LateDays')->nullable();
            $table->string('LoanStatus', 50)->nullable();
            $table->double('Collection_id');
            $table->double('member_id');
            $table->bigInteger('CreateBy')->nullable();
            $table->string('CreateTerminal', 100)->nullable();
            $table->bigInteger('UpdateBy')->nullable();
            $table->string('UpdateTerminal', 100)->nullable();
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
        Schema::dropIfExists('collectionloanitems');
    }
}
