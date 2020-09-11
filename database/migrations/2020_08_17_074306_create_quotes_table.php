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
            $table->integer('customer_id')->nullable(0);
            $table->string('customer_ip',32);
            $table->decimal('grand_total',10,2)->default(0);
            $table->decimal('grand_total_incl_tax',10,2)->default(0);
            $table->decimal('tax',10,2)->default(0);
            $table->decimal('shipping_amount',10,2)->default(0);
            $table->decimal('shipping_amount_incl_tax',10,2)->default(0);
            $table->string('payment_method')->nullable();
            $table->integer('coupon_id')->nullable();
            $table->decimal('coupon_amount',10,2)->default(0);
            $table->string('shipping_method')->nullable();
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
