<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();   // creer une colone 'id' auto-incremente
            $table->string('name_fr');
            $table->string('name_en');
            // Clé étrangère pour les sous-catégories (peut être nulle)
            $table->foreignId('parent_id')->nullable()->constrained('categories');
            $table->timestamps(); // Crée les colonnes 'created_at' et 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
