<?php

use App\Models\Course;
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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Course::class)
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignIdFor(Student::class)
                ->constrained()
                ->cascadeOnDelete();

            $table->date('date');

            $table->string('status')->default('present');

            $table->timestamp('checked_at')->nullable();

            $table->timestamps();

            $table->unique([
                'course_id',
                'student_id',
                'date',
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
