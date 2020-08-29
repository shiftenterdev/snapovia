<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuoteItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quote_id')->constrained();
            $table->integer('product_id');
            $table->string('sku');
            $table->string('name');
            $table->enum('product_type', ['simple', 'configurable', 'grouped', 'virtual']);
            $table->string('product_attribute')->nullable();
            $table->integer('unit_price');
            $table->integer('qty');
            $table->integer('discount_price')->default(0);
            $table->integer('row_total');
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
        Schema::dropIfExists('quote_items');
    }
}
