<?php

namespace App\Filament\Resources\Registrations\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RegistrationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('student_id')
                    ->relationship(name: 'student', titleAttribute: 'first_name')
                    ->preload()
                    ->searchable()
                    ->required(),
                Select::make('academic_year_id')
                    ->relationship(name: 'academicYear', titleAttribute: 'name')
                    ->preload()
                    ->required(),
                Select::make('field_id')
                    ->relationship(name: 'field', titleAttribute: 'name')
                    ->preload()
                    ->searchable()
                    ->required(),
            ]);
    }
}
