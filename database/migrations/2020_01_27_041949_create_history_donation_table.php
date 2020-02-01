<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryDonationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_donations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('donation_id');
            $table->string('status_message');
            $table->string('transaction_id');
            $table->string('gross_amount');
            $table->string('payment_type');
            $table->string('transaction_time');
            $table->string('transaction_status');
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
        Schema::dropIfExists('history_donation');
    }
}
