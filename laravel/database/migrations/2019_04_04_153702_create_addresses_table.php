<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user')->unsigned()->nullable();
					       $table->foreign('user')
            ->references('id')->on('users');
			$table->mediumText('fname')->nullable();
			$table->mediumText('lname')->nullable();
			$table->mediumText('address1')->nullable();
			$table->mediumText('address2')->nullable();
			$table->mediumText('code')->nullable();
			$table->mediumText('phone')->nullable();
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
        Schema::dropIfExists('addresses');
    }
}
