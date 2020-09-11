<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_price_rules', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->boolean('status')->default(1);
            $table->string('customer_group_id')->nullable();
            $table->string('coupon_code');
            $table->integer('per_customer')->default(0);
            $table->integer('max_use')->default(0);
            $table->datetime('from_date')->nullable();
            $table->datetime('to_date')->nullable();
            $table->decimal('discount_amount',10,2);
            $table->enum('discount_type',['AMOUNT','PERCENT']);
            $table->string('conditions')->nullable();
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
        Schema::dropIfExists('cart_rules');
    }
}
