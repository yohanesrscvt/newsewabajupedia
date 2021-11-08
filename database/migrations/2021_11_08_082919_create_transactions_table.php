<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id');
            $table->unsignedBigInteger('customer_id'); // foreign key
            $table->foreign('customer_id')->references('id')->on('users');
            $table->unsignedBigInteger('clothes_id'); // foreign key
            $table->foreign('clothes_id')->references('id')->on('clothes');
            $table->unsignedBigInteger('delivery_id'); // foreign key
            $table->foreign('delivery_id')->references('id')->on('deliveries');
            $table->unsignedBigInteger('laundry_id'); // foreign key
            $table->foreign('laundry_id')->references('id')->on('laundries');
            $table->string('transaction_status');
            $table->unsignedBigInteger('payment_id'); // foreign key
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->bigInteger('penalty');
            $table->date('start');
            $table->date('end');
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
        Schema::dropIfExists('transactions');
    }
}
