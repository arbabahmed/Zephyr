<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMasterFormulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('master_formulas', function (Blueprint $table) {
            // $table->index(['ingredient_id','product_id']);
            $table->foreign('ingredient_id')->references('id')->on('ingredients')->unsigned()->index('fk_ingredient_id');
            $table->foreign('product_id')->references('id')->on('products')->unsigned()->index('fk_product_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('master_formulas', function (Blueprint $table) {
            //
        });
    }
}
