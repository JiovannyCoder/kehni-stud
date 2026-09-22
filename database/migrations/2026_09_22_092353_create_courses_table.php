<?php

use App\Models\AcademicYear;
use App\Models\Field;
use App\Models\User;
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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('code')->unique();

            $table->foreignIdFor(User::class, 'teacher_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->foreignIdFor(Field::class)
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignIdFor(AcademicYear::class)
                ->constrained()
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
