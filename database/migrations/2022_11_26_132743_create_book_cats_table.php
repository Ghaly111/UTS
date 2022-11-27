<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_cats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("bookid")->references('bookid')->on('books')->onpdate('cascade')->ondelete('cascade');
            $table->unsignedBigInteger("categoryid")->references('categoryid')->on('categories')->onpdate('cascade')->ondelete('cascade');
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
        Schema::dropIfExists('book_cats');
    }
}
