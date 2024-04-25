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
        // Schema::disableForeignKeyConstraints();
        Schema::create('deliberations', function (Blueprint $table) {
            $table->id();
            $table->date('dateDelib');
            $table->string('numDelib');
            $table->Text('objet');
            $table->timestamps();
            // $table->foreignId('annee_budgetaire_id')->constrained()->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deliberations');
    }
};
