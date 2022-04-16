<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->string('discription' , 150);
            $table->boolean('Vip_wifi');
            $table->string('location' , 20);
            $table->boolean('coffeeandtea');
            $table->boolean('conditioning');
            $table->boolean('ele');
            $table->boolean('water');
            $table->string('imgUrl' , 150);
            $table->integer('price');
            $table->string('email' , 50);
            $table->float('rating', 3);
            $table->integer('phoneowner');
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
        Schema::dropIfExists('offices');
    }
}
