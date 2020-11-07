<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('books', function (Blueprint $table) {
            $table->integer('books_id');
            $table->string('title');
            $table->text('detail');
            $table->integer('price');
            $table->string('image');
        });

        Schema::table('books', function(Blueprint $table) {
            $table->primary('books_id')->autoIncrement();
           
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
