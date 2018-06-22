<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePendingOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pending_orders', function (Blueprint $table) {
            $table->index(['ingredient_id','manufacture_order_id']);
            $table->foreign('ingredient_id')->references('id')->on('ingredients')->unsigned();
            $table->foreign('manufacture_order_id')->references('id')->on('manufacturing_orders')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pending_orders', function (Blueprint $table) {
            //
        });
    }
}
