<?php

namespace App\Filament\Admin\Resources\Settings\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('key')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->disabled(fn (string $context): bool => $context === 'edit'),
                TextInput::make('label')
                    ->required(),
                Select::make('type')
                    ->options([
                        'text' => 'Text',
                        'textarea' => 'Long Text',
                    ])
                    ->required()
                    ->default('text'),
                Textarea::make('value')
                    ->columnSpanFull(),
            ]);
    }
}
