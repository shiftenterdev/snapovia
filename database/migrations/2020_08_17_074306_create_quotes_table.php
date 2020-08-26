<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->uuid('quote_id');
            $table->integer('customer_id')->default(0);
            $table->integer('grand_total');
            $table->integer('grand_total_incl_tax');
            $table->integer('tax')->default(0);
            $table->integer('shipping_amount');
            $table->integer('shipping_amount_incl_tax');
            $table->integer('transaction_amount');
            $table->string('payment_method');
            $table->string('shipping_method');
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
        Schema::dropIfExists('quotes');
    }
}
