<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTransactionIdLogsTable extends Migration
{
    public function up()
    {
        Schema::table('transaction_id_logs', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'user_fk_4496226')->references('id')->on('users');
        });
    }
}
