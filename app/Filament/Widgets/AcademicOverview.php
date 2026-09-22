<?php

namespace App\Filament\Widgets;

use App\Models\AcademicYear;
use App\Models\Field;
use App\Models\Registration;
use App\Models\Student;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AcademicOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make(
                'Étudiants',
                Student::count()
            )
                ->description('Étudiants enregistrés')
                ->descriptionIcon('heroicon-m-users'),

            Stat::make(
                'Inscriptions',
                Registration::count()
            )
                ->description('Inscriptions enregistrées')
                ->descriptionIcon('heroicon-m-clipboard-document-list'),

            Stat::make(
                'En attente',
                Registration::where('status', 'pending')->count()
            )
                ->description('Inscriptions à traiter')
                ->descriptionIcon('heroicon-m-clock'),

            Stat::make(
                'Filières',
                Field::count()
            )
                ->description('Filières disponibles')
                ->descriptionIcon('heroicon-m-academic-cap'),
        ];
    }
}
