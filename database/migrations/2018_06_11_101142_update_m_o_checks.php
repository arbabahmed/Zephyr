<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMOChecks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('m_o_checks', function (Blueprint $table) {
            $table->index(['mo_id','user_id']);
            $table->foreign('mo_id')->references('id')->on('manufacturing_orders')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('m_o_checks', function (Blueprint $table) {
            //
        });
    }
}
