<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddsTable extends Migration
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
            $table->integer('sub_categorie_id')->unsigned()->index();
            $table->string('add_type');
            $table->string('Adtitle');
            $table->string('describe');
            $table->integer('Price');
            $table->string('Number',15);
            $table->string('address');
            $table->integer('city_id')->unsigned()->index();
            $table->integer('is_approved')->default('0');
            $table->boolean('is_deleted')->default('0');
            $table->string('pic1');
            $table->string('pic2');
            $table->string('pic3');
            $table->string('pic4');
            $table->integer('user_id')->unsigned()->index();
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
        Schema::dropIfExists('advertisements');
    }
}
