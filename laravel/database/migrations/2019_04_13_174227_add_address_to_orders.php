<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAddressToOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		    Schema::table('orders', function($table) {
       			         $table->integer('address')->unsigned()->nullable();
            $table->foreign('address')
            ->references('id')->on('addresses');
    });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
		    Schema::table('users', function($table) {
        $table->dropColumn('paid');
    });
    }
}
