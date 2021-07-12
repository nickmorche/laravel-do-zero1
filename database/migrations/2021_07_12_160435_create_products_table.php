<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id'); //Cria a coluna
            $table->string('name');
            $table->text('description');
            $table->boolean('exclusive');
            $table->timestamps();
            $table->softDeletes();

            //Verifica a documentação antes de fazer esses relacionamentos merda
            //https://laravel.com/docs/5.8/migrations#foreign-key-constraints

            //Faz o relacionamento
            $table->foreign('category_id') 
                ->references('id')
                ->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
