<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataownersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataowners', function (Blueprint $table) {
            $table->id();
            $table->string('name',20);
            $table->integer('phone');
            $table->string('companyname',20);
            $table->string('email',20)->unique();
            $table->string('password',100);
            $table->string('location',20);
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
        Schema::dropIfExists('dataowners');
    }
}
