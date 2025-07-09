<x-filament::widget>
    <div class="space-y-3">
        <h3 class="text-lg font-semibold">📢 Notifikasi Terbaru</h3>
        @foreach ($this->getNotifications() as $notification)
            <div class="p-3 rounded bg-yellow-100 text-sm">
                {{ $notification['title'] }}
            </div>
        @endforeach
    </div>
</x-filament::widget>
