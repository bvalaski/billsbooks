<?php

/**
 * 2022_04_15 Added additional "supporting" fields for
 *   published, rating, co-author, series, owned
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
           $table->id();
           $table->string('title');
           $table->string('isbn');
           $table->integer('published');
           $table->date('date_read');
           $table->integer('rating');

           $table->unsignedBigInteger('genre_id')->default(1); 
           $table->foreign('genre_id')->references('id')->on('genres');

           $table->unsignedBigInteger('author_id')->default(1); 
           $table->foreign('author_id')->references('id')->on('authors');

           $table->unsignedBigInteger('coauthor_id')->default(1); 
           $table->foreign('coauthor_id')->references('id')->on('authors');

           $table->unsignedBigInteger('series_id')->default(1); 
           $table->foreign('series_id')->references('id')->on('series');

           $table->unsignedBigInteger('owned_id')->default(1);
           $table->foreign('owned_id')->references('id')->on('owned');

           $table->string('comments');
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
        Schema::dropIfExists('books');
    }
}
