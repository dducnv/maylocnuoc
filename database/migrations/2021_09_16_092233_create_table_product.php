<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->text('product_image');
            $table->text('product_gallery');
            $table->string('product_tags')->nullable();
            $table->string('product_slug')->unique();
            $table->unsignedBigInteger('product_views')->default(0);
            $table->unsignedBigInteger('product_sold')->default(0);
            $table->bigInteger('product_price');
            $table->text('product_desc');
            $table->text('product_content');
            $table->text('product_specification');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedInteger('product_status');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('brand_id')->references('id')->on('brands');
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
