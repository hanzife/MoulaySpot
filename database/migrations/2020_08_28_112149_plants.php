<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Plants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255);
            $table->text('description');
            $table->decimal('price',3,2);
            $table->integer('quantity_stock');
            $table->string('family',255);
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
        //
    }
}
