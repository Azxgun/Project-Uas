<?php

namespace App\Filament\Widgets;

use App\Models\Event;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;

class StatistikBelajar extends ChartWidget
{
    protected static ?string $heading = 'Statistik Durasi Belajar / Mata Kuliah';

    protected static ?int $sort = 1;

    protected function getData(): array
    {
        // Ambil minggu ini
        $start = Carbon::now()->startOfWeek();
        $end = Carbon::now()->endOfWeek();

        // Ambil event minggu ini
        $events = Event::with('course')
            ->whereBetween('starts_at', [$start, $end])
            ->get();

        // Kelompokkan per mata kuliah dan jumlahkan durasinya
        $durasiPerMataKuliah = $events->groupBy('course.name')->map(function ($group) {
            return $group->sum('durasi'); // dalam menit
        });

        return [
            'datasets' => [
                [
                    'label' => 'Durasi Belajar (menit)',
                    'data' => $durasiPerMataKuliah->values(),
                    'backgroundColor' => 'rgba(54, 162, 235, 0.6)',
                ],
            ],
            'labels' => $durasiPerMataKuliah->keys(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
