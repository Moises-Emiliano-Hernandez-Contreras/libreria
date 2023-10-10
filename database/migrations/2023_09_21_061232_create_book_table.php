<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->string("code");
            $table->string("title");
            $table->string("author");
            $table->string("country");
            $table->integer("year");
            $table->string("publisher");
            $table->string("edition");
            $table->foreignId("empresas_id")->references("id")->on("empresas");
            $table->foreignId("category_id")->references("id")->on("category");
            $table->foreignId("provider_id")->references("id")->on("provider");
            $table->float("price");
            $table->integer("copies");
            $table->string("address");
            $table->string("summary",250);
            $table->string("image_name");
            $table->string("pdf_name");
            $table->boolean("downloadable")->nulleable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book');
    }
};
