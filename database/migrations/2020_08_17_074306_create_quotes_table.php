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
            $table->string('customer_ip',32);
            $table->integer('grand_total')->default(0);
            $table->integer('grand_total_incl_tax')->default(0);
            $table->integer('tax')->default(0);
            $table->integer('shipping_amount')->default(0);
            $table->integer('shipping_amount_incl_tax')->default(0);
            $table->string('payment_method')->nullable();
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
