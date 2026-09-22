<?php

namespace App\Filament\Resources\Registrations\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class RegistrationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('student.first_name')
                    ->label('Student'),
                TextEntry::make('academicYear.name')
                    ->label('Academic Year'),
                TextEntry::make('field.name')
                    ->label('Field'),
                TextEntry::make('status'),
                TextEntry::make('registered_at')
                    ->dateTime(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
