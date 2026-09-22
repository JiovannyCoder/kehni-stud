<?php

namespace App\Filament\Resources\Courses\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CourseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('code')
                    ->required(),
                Select::make('teacher_id')
                    ->relationship(name: 'teacher', titleAttribute: 'name')
                    ->preload()
                    ->required(),
                Select::make('field_id')
                    ->relationship(name: 'field', titleAttribute: 'name')
                    ->preload()
                    ->required(),
                Select::make('academic_year_id')
                    ->relationship(name: 'academicYear', titleAttribute: 'name')
                    ->preload()
                    ->required(),
            ]);
    }
}
