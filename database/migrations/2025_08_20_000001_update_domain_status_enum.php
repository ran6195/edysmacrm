<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\DomainStatus;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('domains', function (Blueprint $table) {
            // Aggiorna la colonna status per includere i nuovi valori dell'enum
            $table->enum('status', array_column(DomainStatus::cases(), 'value'))
                ->default(DomainStatus::ACTIVE->value)
                ->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('domains', function (Blueprint $table) {
            // Ripristina i valori originali (modifica se necessario)
            $table->enum('status', [
                'active',
                'suspended',
                'to_be_dismissed',
                'dismissed',
            ])->default('active')->change();
        });
    }
};
