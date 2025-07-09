<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        Event::create([
            'name' => 'Pemrograman Web',
            'location' => 'Ruang 201',
            'lecturer' => 'Pak Budi',
            'starts_at' => Carbon::now()->addDays(1)->setTime(8, 0),
            'ends_at' => Carbon::now()->addDays(1)->setTime(10, 0),
        ]);

        Event::create([
            'name' => 'Jaringan Komputer',
            'location' => 'Lab 2',
            'lecturer' => 'Bu Sari',
            'starts_at' => Carbon::now()->addDays(2)->setTime(10, 0),
            'ends_at' => Carbon::now()->addDays(2)->setTime(12, 0),
        ]);
    }
}
