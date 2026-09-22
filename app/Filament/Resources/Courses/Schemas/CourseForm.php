<?php

namespace App\Filament\Resources\Courses\Schemas;

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
                TextInput::make('teacher_id')
                    ->required()
                    ->numeric(),
                TextInput::make('field_id')
                    ->required()
                    ->numeric(),
                TextInput::make('academic_year_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
