<?php

use App\Models\AcademicYear;
use App\Models\Field;
use App\Models\Registration;
use App\Models\Student;
use Livewire\Component;

class PublicRegistrationForm extends Component
{
    public array $data = [];

    public $academicYears;

    public $fields;

    public function mount(): void
    {
        $this->academicYears = AcademicYear::query()
            ->orderByDesc('start_date')
            ->get();

        $this->fields = Field::query()
            ->orderBy('name')
            ->get();
    }

    protected function rules(): array
    {
        return [
            'data.first_name' => ['required', 'string', 'max:255'],
            'data.last_name' => ['required', 'string', 'max:255'],
            'data.student_number' => ['required', 'string', 'max:255'],
            'data.email' => ['nullable', 'email', 'max:255'],
            'data.phone' => ['nullable', 'string', 'max:30'],
            'data.academic_year_id' => ['required', 'exists:academic_years,id'],
            'data.field_id' => ['required', 'exists:fields,id'],
        ];
    }

    public function submit(): void
    {
        $validated = $this->validate();

        $student = Student::create([
            'first_name' => $validated['data']['first_name'],
            'last_name' => $validated['data']['last_name'],
            'student_number' => $validated['data']['student_number'],
            'email' => $validated['data']['email'] ?? null,
            'phone' => $validated['data']['phone'] ?? null,
        ]);

        Registration::create([
            'student_id' => $student->id,
            'academic_year_id' => $validated['data']['academic_year_id'],
            'field_id' => $validated['data']['field_id'],
            'status' => 'pending',
        ]);

        session()->flash(
            'success',
            'L’inscription de l’étudiant a été enregistrée avec succès.'
        );

        $this->reset('data');
    }

    public function render()
    {
        return view('livewire.public-registration-form');
    }
}
