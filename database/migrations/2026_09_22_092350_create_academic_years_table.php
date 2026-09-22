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
        Schema::create('academic_years', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->date('start_date');
            $table->date('end_date');

            $table->timestamps();
        });

        $academicYears = [];

        for ($year = 2026; $year < 2036; $year++) {
            $academicYears[] = [
                'name' => "{$year}-" . ($year + 1),
                'start_date' => "{$year}-09-01",
                'end_date' => ($year + 1) . '-07-31',
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('academic_years')->insert($academicYears);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_years');
    }
};
