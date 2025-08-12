<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('synopsis');
            $table->year('year');
            $table->text('cover_url');
            $table->text('book_url');
            $table->unsignedBigInteger('author_id')->index();
            $table->foreign('author_id')->references('id')->on('authors');

            $table->unsignedBigInteger('publisher_id')->index();
            $table->foreign('publisher_id')->references('id')->on('publisher');

            $table->unsignedBigInteger('category_id')->index();
            $table->foreign('category_id')->references('id')->on('categories');

            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users');

            $table->boolean('is_published')->default(false);
            $table->bigInteger('views')->default(0);

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
