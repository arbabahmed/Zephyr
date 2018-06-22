<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateManufacturingOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('manufacturing_orders', function (Blueprint $table) {
            $table->index(['product_id','author_id']);
            $table->foreign('product_id')->references('id')->on('products')->unsigned();
            $table->foreign('author_id')->references('id')->on('users')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('manufacturing_orders', function (Blueprint $table) {
            //
        });
    }
}
