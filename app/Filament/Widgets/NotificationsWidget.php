<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class NotificationsWidget extends Widget
{
    protected static string $view = 'filament.widgets.notifications-widget';

    protected static ?int $sort = 1;

    public function getNotifications(): array
    {
        return [
            ['title' => 'Deadline Project Pemweb tinggal 6 jam lagi!'],
            ['title' => 'Catatan Basis Data masih belum selesai.'],
        ];
    }
}
