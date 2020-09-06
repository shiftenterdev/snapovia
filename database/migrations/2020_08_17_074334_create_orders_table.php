<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->string('invoice_id');
            $table->string('customer_ip',32);
            $table->string('order_status')->default('processing');
            $table->string('payment_status');
            $table->string('status');
            $table->string('delivery_status')->nullable();
            $table->string('refund_status')->nullable();
            $table->integer('customer_id')->default(0);
            $table->decimal('grand_total')->default(0);
            $table->decimal('grand_total_incl_tax')->default(0);
            $table->integer('tax')->default(0);
            $table->integer('shipping_amount')->default(0);
            $table->integer('shipping_amount_incl_tax')->default(0);
            $table->string('payment_method')->default('cod');
            $table->string('shipping_method')->default('free');
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
