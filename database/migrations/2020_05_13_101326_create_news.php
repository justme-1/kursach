<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('News', function (Blueprint $table) {
            $table->charset="utf8mb4";
            $table->collation="utf8mb4_unicode_ci";
            $table->increments('id');
            $table->string('header');
            $table->string('headerRu')->nullable();
            $table->string('image');
            $table->string('news');
            $table->string('newsRu')->nullable();
            $table->string('author');
            $table->string('news_short');
            $table->string('news_shortRu')->nullable();
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
        Schema::dropIfExists('News');
    }
}
