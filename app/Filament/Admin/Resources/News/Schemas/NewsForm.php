<?php

namespace App\Filament\Admin\Resources\News\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('News Content')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true),
                        RichEditor::make('content')
                         ->fileAttachmentsDisk('public')
                    ->fileAttachmentsDirectory('news')
                    ->fileAttachmentsVisibility('public')
                            ->columnSpanFull(),
                    ])->columns(2),
                Section::make('Metadata')
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->disk('public')
                            ->directory('news'),
                        TextInput::make('category')
                            ->required()
                            ->default('news'),
                        Toggle::make('is_published')
                            ->default(false),
                    ])->columns(2),
            ]);
    }
}
