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
        Schema::create('promotions', function (Blueprint $table) {
          $table->increments('Id_promotion');
          $table->string('Name_promotion')->nullable();
       
        });
        Schema::create('ampprenants',function (Blueprint $table){
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('prenom')->nullable() ;
            $table->string('email')->nullable();
            $table->unsignedInteger('id_promotion');
            $table->foreign('id_promotion')
            ->references('Id_promotion')
            ->on('promotions')
            ->onDelete('cascade'); 
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
};

// 