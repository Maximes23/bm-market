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
        Schema::table('users', function (Blueprint $table) {
            // On ajoute la colonne 'role' après la colonne 'email'
            // C'est une chaîne de caractères, avec 'customer' comme valeur par défaut.
            $table->string('role')->after('email')->default('customer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Si on annule la migration, on supprime la colonne
            $table->dropColumn('role');
        });
    }
};