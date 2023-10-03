<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('link');
            $table->bigInteger('views');
            $table->text('description');
            $table->boolean('social_type');
            $table->boolean('is_active');
            $table->uuid('category_id');
            $table->uuid('language_id');
            $table->uuid('collection_id');
            $table->foreign('language_id')->references('id')->on('languages');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('collection_id')->references('id')->on('collections');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
