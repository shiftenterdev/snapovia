<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('org_name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('email_verified_at')->nullable();
            $table->string('vendor_banner')->nullable();
            $table->string('vendor_logo')->nullable();
            $table->text('address');
            $table->boolean('status')->default(1);
            $table->decimal('commission_rate')->default(5.00);
            $table->text('bank_details')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
