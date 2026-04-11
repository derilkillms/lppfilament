<?php

namespace App\Filament\Admin\Resources\Announcements\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AnnouncementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make([
                    TextInput::make('title')
                        ->required(),
                    RichEditor::make('content')
                        ->columnSpanFull(),
                    DatePicker::make('date')
                        ->default(now()),
                    TextInput::make('category'),
                ])->columns(2),
            ]);
    }
}
