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
            $table->increments('id');
             $table->integer('ph_name')->unsigned()->index();
            $table->foreign('ph_name')
                ->references('id')->on('pharmacies')
                ->onDelete('cascade');
             $table->integer('c_name')->unsigned()->index();
            $table->foreign('c_name')
                ->references('id')->on('pharmacies')
                ->onDelete('cascade');
            $table->string('p_name');
             $table->integer('Category_id')->unsigned()->index();
            $table->foreign('Category_id')
                ->references('id')->on('categories')
                ->onDelete('cascade');
            $table->integer('brand')->unsigned()->index();
            $table->foreign('brand')
                   ->references('id')->on('categories')
                   ->onDelete('cascade');
            $table->integer('selling_price');
            $table->integer('quantity');
            $table->string('details');

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
        Schema::dropIfExists('products');
    }
}
