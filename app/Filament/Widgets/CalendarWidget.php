<?php

namespace App\Filament\Widgets;

use App\Models\Event;
use App\Models\Course;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\ColorPicker;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

class CalendarWidget extends FullCalendarWidget
{
    protected static ?string $heading = 'Jadwal Kuliah';
    protected static ?int $sort = 2;

    public function model(): string
    {
        return Event::class;
    }

    public function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->label('Nama Jadwal / Topik')
                ->required(),

            Select::make('course_id')
                ->label('Mata Kuliah')
                ->options(Course::pluck('name', 'id')->toArray())
                ->searchable()
                ->required(),

            TextInput::make('lecturer')
                ->label('Dosen')
                ->nullable(),

            TextInput::make('location')
                ->label('Ruangan')
                ->nullable(),

            DateTimePicker::make('starts_at')
                ->label('Waktu Mulai')
                ->required(),

            DateTimePicker::make('ends_at')
                ->label('Waktu Selesai')
                ->required(),

            ColorPicker::make('color')
                ->label('Warna Event')
                ->nullable(),
        ];
    }

    protected function getEventTitleFromRecord($record): ?string
    {
        return $record->name;
    }

    protected function getEventStartFromRecord($record): string
    {
        return $record->starts_at;
    }

    protected function getEventEndFromRecord($record): string
    {
        return $record->ends_at;
    }

    protected function getEventColorFromRecord($record): ?string
    {
        return $record->color ?? '#3b82f6'; // default jika kosong
    }
}
