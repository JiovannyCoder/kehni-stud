<?php

namespace App\Filament\Widgets;

use App\Models\Registration;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;

class RegistrationChart extends ChartWidget
{
    protected ?string $heading = 'Inscriptions';

    protected ?string $description = 'Nombre d’inscriptions au cours des 12 derniers mois';

    protected int | string | array $columnSpan = 'full';

    protected ?string $maxHeight = '460px';

    protected function getData(): array
    {
        $startDate = now()
            ->startOfMonth()
            ->subMonths(11);

        $registrations = Registration::query()
            ->where('created_at', '>=', $startDate)
            ->get()
            ->groupBy(
                fn(Registration $registration) =>
                $registration->created_at->format('Y-m')
            );

        $labels = [];
        $data = [];

        for ($i = 0; $i < 12; $i++) {
            $date = $startDate->copy()->addMonths($i);

            $key = $date->format('Y-m');

            $labels[] = $date->translatedFormat('M');
            $data[] = $registrations->get($key, collect())->count();
        }

        return [
            'datasets' => [
                [
                    'label' => 'Inscriptions',
                    'data' => $data,
                    'borderColor' => '#0f172a',
                    'backgroundColor' => 'rgba(15, 23, 42, 0.1)',
                    'fill' => true,
                    'tension' => 0.3,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
