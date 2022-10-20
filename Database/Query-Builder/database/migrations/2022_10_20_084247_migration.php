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
        Schema::create('promotion', function (Blueprint $table) {

            $table->increments('id_promotion');
            $table->string('name_promotion')->nullable();

                });

                Schema::create('Person', function (Blueprint $table) {
                      // Primary key (increments)
                        $table->increments("id");
                        $table->string('Nom')->nullable();
                        // UNIQUE KEY (unsignedInteger)
                        $table->unsignedInteger('Name_promotion')->nullable();
                        $table->foreign('Name_promotion')
                        ->references('id_promotion')
                        ->on('promotion')
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
