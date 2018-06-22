<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendingOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pending_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_no');
            $table->float('quantity');
            $table->unsignedInteger('ingredient_id');
            $table->unsignedInteger('manufacture_order_id');
            $table->float('assigned_quantity');
            $table->float('issued_quantity');
            $table->string('unit');
            $table->string('issued_by_warehouse');
            $table->integer('verified_by_qa');
            $table->integer('verified_by_production');
            $table->integer('status');
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
        Schema::dropIfExists('pending_orders');
    }
}
