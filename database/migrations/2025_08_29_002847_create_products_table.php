<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // Clé étrangère vers la table 'categories'
            // On met 'RESTRICT' pour empêcher la suppression d'une catégorie si elle a des produits
            $table->foreignId('category_id')->constrained()->onDelete('restrict');
            $table->string('name_fr');
            $table->string('name_en');
            $table->text('description_fr');
            $table->text('description_en');
            $table->decimal('price', 10, 2); // 10 chiffres au total, 2 après la virgule
            $table->integer('stock')->default(0);
            $table->boolean('is_digital')->default(false);
            $table->string('image_url')->nullable(); // L'URL de l'image peut être nulle
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
