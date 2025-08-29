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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            // Si une commande est supprimée, ses lignes de détail aussi.
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            // On empêche la suppression d'un produit s'il est dans une commande.
            $table->foreignId('product_id')->constrained()->onDelete('restrict');
            $table->integer('quantity');
            $table->decimal('price_at_purchase', 10, 2);
            // Pas de timestamps ici, la date est sur la commande parente.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
