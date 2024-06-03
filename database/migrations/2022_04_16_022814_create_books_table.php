<?php

/**
 * 2022_04_15 Added additional "supporting" fields for
 *   published, rating, co-author, series, owned
 *
 * co-author and owned fields need to be null so blanks
 *   in these fields do not cause an error.
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('isbn')->nullable();
            $table->integer('published')->nullable()->default(1900);
            $table->date('date_read')->nullable();
            $table->integer('rating')->nullable()->default(0);

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

            $table->string('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
