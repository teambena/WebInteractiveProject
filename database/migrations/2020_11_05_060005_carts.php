<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Carts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('carts', function (Blueprint $table) {
            $table->integer('carts_id');
            $table->integer('books_id');
            $table->integer('id');

        });

        Schema::table('carts', function(Blueprint $table) {
            $table->primary('carts_id')->autoIncrement();
            $table->foreign('books_id', 'carts_fk1')->references('books_id')->on('books')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id', 'carts_fk2')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
