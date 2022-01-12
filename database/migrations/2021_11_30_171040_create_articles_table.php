<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('tag');
            $table->string('category')->nullable();
            $table->decimal('price', 10, 2);
            $table->decimal('solde_price', 10, 2)->nullable();
            $table->text('desc')->nullable();
            $table->string('nbre_exemplaire');
            $table->string('picture_1');
            $table->string('picture_2')->nullable();
            $table->string('picture_3')->nullable();
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
        Schema::dropIfExists('articles');
    }
}
