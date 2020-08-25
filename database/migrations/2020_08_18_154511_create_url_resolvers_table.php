<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrlResolversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('url_resolvers', function (Blueprint $table) {
            $table->id();
            $table->string('entity_id');
            $table->enum('entity_type',['product','category','page']);
            $table->string('url_key')->unique();
            $table->string('url_path')->nullable();
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
        Schema::dropIfExists('url_resolvers');
    }
}
