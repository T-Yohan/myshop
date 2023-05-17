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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            //je creé une clé étrangère que je nomme category_id
            $table->unsignedBigInteger('category_id');
            // J'indique que ma clé étrangère aura pour reference l'id de la table étrangère Category
            $table->foreign('category_id')->references('id')->on('categories');

            //je creé une clé étrangère que je nomme user_id
            $table->unsignedBigInteger('user_id');
            // J'indique que ma clé étrangère aura pour reference l'id de la table étrangère Category
            $table->foreign('user_id')->references('id')->on('users');

            // Je crée la colonne name de type string et qui sera limiter a 150 caractères
            $table->string('name', 150);
            // Je crée la colonne description de type text et qui poura etre Null
            $table->text('description')->nullable();
            // Je crée la colonne prix de type decimal et qui aura 8 chiffre et 2 Chiffre apres la virgule et true qui indique qui pourra etre que positif
            $table->decimal('prix', 8, 2, true);


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
