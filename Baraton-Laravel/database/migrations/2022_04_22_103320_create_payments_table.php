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
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->string('fname');
            $table->string('lname');
            $table->string('troom');
            $table->string('tbed');
            $table->integer('nroom');
            $table->date('cin');
            $table->date('cout');
            $table->decimal('ttot',8,2);
            $table->decimal('fintot',8,2);
            $table->decimal('mepr',8,2);
            $table->string('meal');
            $table->decimal('btot',8,2);
            $table->integer('noofdays');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
