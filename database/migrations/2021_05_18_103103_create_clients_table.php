<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('photo')->nullable();
            $table->string('banner')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->string('slug')->nullable();
            $table->longText('description')->nullable();
            $table->string('metaData')->nullable();
            $table->string('metaDescription')->nullable();
            $table->string('keywords')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
