<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('code')->unique();

            $table->timestamps();
        });

        DB::table('fields')->insert([
            [
                'name' => 'Informatique',
                'code' => 'INFO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Génie logiciel',
                'code' => 'GL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Réseaux et Télécommunications',
                'code' => 'RT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gestion',
                'code' => 'GEST',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Finance et Comptabilité',
                'code' => 'FC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Droit',
                'code' => 'DROIT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Économie',
                'code' => 'ECO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Marketing et Communication',
                'code' => 'MARK',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ressources Humaines',
                'code' => 'RH',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sciences de la Vie',
                'code' => 'SV',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sciences de la Terre et de l’Environnement',
                'code' => 'STE',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Génie Civil',
                'code' => 'GC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fields');
    }
};
