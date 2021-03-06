<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger("category_id");
            $table->foreign("category_id")->references("id")->on("categories");
            $table->unsignedBigInteger("brand_id")->nullable();
            $table->foreign("brand_id")->references("id")->on("brands");
            $table->unsignedBigInteger("subcategory_id")->nullable();
            $table->foreign("subcategory_id")->references("id")->on("sub_categories");
            $table->string("product_name");
            $table->string("slug")->unique();
            $table->string("product_code");
            $table->string("product_quantity");
            $table->text("proeduct_details");
            $table->string('product_color');
            $table->string("product_size");
            $table->string('selling_price');
            $table->string("discount_price")->nullable();
            $table->string("video_link")->nullable();
            $table->integer("main_slider")->nullable();
            $table->integer("hot_deal")->nullable();
            $table->integer("mid_slider")->nullable();
            $table->integer("best_rated")->nullable();
            $table->integer("hot_new")->nullable();
            $table->integer("trend")->nullable();
            $table->string("image_one");
            $table->string("image_two");
            $table->string("image_three");
            $table->integer("status")->nullable();

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
