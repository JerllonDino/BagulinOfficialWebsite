<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourismAndAgriculture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourisms', function (Blueprint $table) {
            $table->id();
            $table->integer('order')->default(0);
            $table->string('spot_name');
            $table->text('spot_description');
            $table->string('spot_location');
            $table->text('spot_geolocation')->nullable();
            $table->string('directory');
            $table->timestamps();
        });

        Schema::create('tourism_images', function (Blueprint $table){
            $table->id();
            $table->foreignId('tourism_id')->constrained()->onDelete('cascade');
            $table->integer('order')->default(0);
            $table->text('file_name');
            $table->timestamps();
        });

        Schema::create('agricultures', function (Blueprint $table) {
            $table->id();
            $table->integer('order')->default(0);
            $table->string('product_name');
            $table->string('product_location');
            $table->text('product_description');
            $table->string('directory');
            $table->timestamps();
        });

        Schema::create('agriproduct_images', function (Blueprint $table){
            $table->id();
            $table->foreignId('agriculture_id')->constrained()->onDelete('cascade');
            $table->integer('order')->default(0);
            $table->text('file_name');
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
        Schema::dropIfExists('tourism_images');
        Schema::dropIfExists('tourisms');
        Schema::dropIfExists('agriproduct_images');
        Schema::dropIfExists('agricultures');
    }
}
