<x-filament::widget>
    <div class="space-y-3">
        <h3 class="text-lg font-semibold">📈 Progress Tugas</h3>
        <div class="w-full bg-gray-200 rounded-full h-4">
            <div class="bg-green-500 h-4 rounded-full transition-all duration-300" style="width: {{ $this->getProgress() }}%"></div>
        </div>
        <p class="text-sm text-gray-600">{{ $this->getProgress() }}% selesai</p>
    </div>
</x-filament::widget>
