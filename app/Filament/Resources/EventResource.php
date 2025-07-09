<?php

// app/Filament/Resources/EventResource.php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Models\Event;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ViewAction;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationLabel = 'Jadwal Kuliah';
    protected static ?string $navigationGroup = 'Manajemen Jadwal';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->label('Nama Jadwal / Topik')
                ->required(),

            Forms\Components\Select::make('course_id')
                ->label('Mata Kuliah')
                ->relationship('course', 'name')
                ->searchable()
                ->required(),

            Forms\Components\TextInput::make('lecturer')
                ->label('Dosen')
                ->nullable(),

            Forms\Components\TextInput::make('location')
                ->label('Ruangan')
                ->nullable(),

            Forms\Components\DateTimePicker::make('starts_at')
                ->label('Mulai')
                ->required(),

            Forms\Components\DateTimePicker::make('ends_at')
                ->label('Selesai')
                ->required(),

            Forms\Components\ColorPicker::make('color')
                ->label('Warna Event')
                ->nullable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Topik')->searchable(),
                TextColumn::make('course.name')->label('Mata Kuliah')->sortable()->searchable(),
                TextColumn::make('lecturer')->label('Dosen'),
                TextColumn::make('location')->label('Ruangan'),
                TextColumn::make('starts_at')->label('Mulai')->dateTime('d M Y H:i'),
                TextColumn::make('ends_at')->label('Selesai')->dateTime('d M Y H:i'),
                ColorColumn::make('color')->label('Warna'),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
                ViewAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
