<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScordersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scorders', function (Blueprint $table) {
            $table->string('order_number', 50);
            $table->string('customer_name', 255);
            $table->string('customer_email', 255);
            $table->decimal('total_price', 10, 2);
            $table->string('status', 50);
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
        Schema::drop('scorders');
    }
}
