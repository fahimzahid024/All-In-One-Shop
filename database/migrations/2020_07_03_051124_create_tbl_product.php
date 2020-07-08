<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name');
            $table->Integer('category_id');
            $table->Integer('subcategory_id');
            $table->string('product_size')->nullable();
            $table->Integer('product_price');
            $table->Integer('product_quantity');
            $table->string('product_color')->nullable();
            $table->Text('product_short_description');
            $table->Text('product_long_description');
            $table->string('product_image');
            $table->Integer('product_status')->default(0);
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
        Schema::dropIfExists('tbl_product');
    }
}
