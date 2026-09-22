<?php

use App\Models\AcademicYear;
use App\Models\Field;
use App\Models\Student;
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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Student::class)
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignIdFor(AcademicYear::class)
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignIdFor(Field::class)
                ->constrained()
                ->cascadeOnDelete();

            $table->string('status')->default('pending');
            $table->timestamp('registered_at')->useCurrent();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
