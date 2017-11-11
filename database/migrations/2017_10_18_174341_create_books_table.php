<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('book_id');
            $table->string('book_name');
            $table->string('author');
            $table->string('section');
            $table->string('publication');
            $table->string('edition');
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
       
    }
}
