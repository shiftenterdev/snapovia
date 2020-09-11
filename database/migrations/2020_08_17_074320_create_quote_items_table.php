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
            $table->foreignId('product_id')->constrained();
            $table->string('sku');
            $table->string('name');
            $table->enum('product_type', ['simple', 'configurable', 'grouped', 'virtual']);
            $table->string('product_attributes')->nullable();
            $table->decimal('price',10,2);
            $table->integer('qty');
            $table->decimal('discount_price',10,2)->default(0);
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
