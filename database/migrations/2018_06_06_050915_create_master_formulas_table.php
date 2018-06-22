<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterFormulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_formulas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('quality_check')->unique();
            $table->unsignedInteger('ingredient_id');
            $table->unsignedInteger('product_id');
            $table->float('quantity');
            $table->float('sachet');
            $table->float('exact_w_w');
            $table->integer('checked_by_production');
            $table->integer('checked_by_quality_check');
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
        Schema::dropIfExists('master_formulas');
    }
}
