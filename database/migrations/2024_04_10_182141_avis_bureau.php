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
        Schema::disableForeignKeyConstraints();
        Schema::create('avis_bureaus', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->date('dateAvis');
            $table->integer('montant');
            $table->text('libelle');
            $table->timestamps();
            $table->foreignId('annee_budgetaire_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('entreprise_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('section_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('arrete_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('article_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('signataire_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('loi_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avis_bureaus');
    }
};
