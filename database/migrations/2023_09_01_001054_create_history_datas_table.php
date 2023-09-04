<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historydata', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Action');
            $table->string('TableName');
            $table->string('IDRef');
            $table->string('Note')->nullable();
            $table->bigInteger('CreatedBy')->nullable();
            $table->string('CreatedTerminal')->nullable();
            $table->bigInteger('UpdateBy')->nullable();
            $table->string('UpdateTerminal')->nullable();
            $table->double('Member_id')->nullable();
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
        Schema::dropIfExists('history_datas');
    }
}
