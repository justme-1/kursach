<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned()->default(1)->nullable();
            $table->string('long')->nullable();
            $table->string('lat')->nullable();
            $table->integer('price')->default(0);
            $table->boolean('checked')->default(false);
            $table->json('images')->nullable();
            $table->text('description')->nullable();
            $table->text('descriptionRu')->nullable();
            $table->integer('area');
            $table->integer('rooms');
            $table->unsignedInteger('type_id')->default(1);
            $table->timestamps();
        });
        Schema::table('subjects', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('subjects', function (Blueprint $table) {
        $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
