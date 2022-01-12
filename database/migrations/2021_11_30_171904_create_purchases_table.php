<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->integer('article');
            $table->integer('quantity');
            $table->decimal('total_price', 10, 2)->nullable();
            $table->timestamps();
/*
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('article_id');
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
*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
