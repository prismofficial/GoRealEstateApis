<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('route')->unique();
            $table->json('content')->nullable(); // JSON column for flexible content
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
