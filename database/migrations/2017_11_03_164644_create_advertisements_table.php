<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('price');
            $table->enum('price_type', ['NEGOTIABLE', 'FIXED'])->default('NEGOTIABLE');
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->enum('status',['ACTIVE', 'INACTIVE'])->default('ACTIVE');
            $table->text('description');
            $table->string('city');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertisements');
    }
}
