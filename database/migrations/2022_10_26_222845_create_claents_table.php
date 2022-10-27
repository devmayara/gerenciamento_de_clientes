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
        Schema::create('claents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname')->nullable();
            $table->string('cpf_cnpj');
            $table->string('phone');
            $table->string('email');
            $table->string('zip');
            $table->string('address');
            $table->string('state');
            $table->string('complement')->nullable();
            $table->string('city');
            $table->integer('num');
            $table->string('name_1')->nullable();
            $table->string('phone_1')->nullable();
            $table->string('email_1')->nullable();
            $table->string('name_2')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('email_2')->nullable();
            $table->string('name_3')->nullable();
            $table->string('phone_3')->nullable();
            $table->string('email_3')->nullable();
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
        Schema::dropIfExists('claents');
    }
};
