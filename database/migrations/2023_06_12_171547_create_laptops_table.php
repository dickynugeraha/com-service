<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->double("price", 10, 2);
            $table->string("description");
            $table->string("photo");
            $table->string("photo2")->nullable();
            $table->string("photo3")->nullable();
            $table->string("photo4")->nullable();
            $table->string("category");
            $table->boolean("is_available")->default(1);
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
        Schema::dropIfExists('laptops');
    }
};
