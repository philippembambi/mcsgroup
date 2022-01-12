<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baskets', function (Blueprint $table) {
            $table->id();
            /*
            $table->foreignIdFor(Client::class, 'client');
            $table->foreignIdFor(Article::class, 'article');
            */
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('article_id');
            $table->timestamps();

             $table->foreign('user_id')
             ->references('id')
             ->on('users')
             ->onDelete('restrict')
             ->onUpdate('restrict');

             $table->foreign('article_id')
             ->references('id')
             ->on('articles')
             ->onDelete('restrict')
             ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baskets');
    }
}
