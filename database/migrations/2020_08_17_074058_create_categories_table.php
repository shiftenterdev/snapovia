<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('position')->nullable();
            $table->integer('parent_id')->default(0);
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('url_key');
            $table->string('url_path')->nullable();
            $table->boolean('status')->default(1);
            $table->boolean('include_in_menu')->default(1);
            $table->boolean('featured')->default(0);
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
        Schema::dropIfExists('categories');
    }
}
