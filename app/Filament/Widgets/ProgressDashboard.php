<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class ProgressDashboard extends Widget
{
    protected static string $view = 'filament.widgets.progress-dashboard';

    public function getProgress(): int
    {
        // Contoh dummy data, ubah sesuai query catatanmu
        return 75; // 75% selesai
    }
}
