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
            $table->string('id')->notnullable();
            $table->string('name');
            $table->string('unit');
            $table->String('price');
            $table->string('quantity');
            $table->unsignedBigInteger('catagory_id')->foreign('catagory_id')->references('id')->on('catagory')->onDelete('Casecade');
            
            $table->timestamps();
           // $table->timestamps();
            

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
