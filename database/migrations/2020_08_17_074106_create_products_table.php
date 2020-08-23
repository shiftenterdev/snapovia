<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sku');
            $table->string('name');
            $table->enum('product_type',['simple','configurable','group','virtual']);
            $table->boolean('status')->default(1);
            $table->string('url_key')->unique();
            $table->boolean('is_new')->default(0);
            $table->boolean('featured')->default(0);
            $table->decimal('qty')->default(30);
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->boolean('stock_status')->default(1);
            $table->boolean('enable_stock')->default(1);
            $table->decimal('weight')->default(1);
            $table->integer('visibility')->default(3);
            $table->integer('price');
            $table->integer('special_price')->default(0.00);
            $table->dateTime('special_price_from')->nullable();
            $table->dateTime('special_price_to')->nullable();
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
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
        Schema::dropIfExists('products');
    }
}
