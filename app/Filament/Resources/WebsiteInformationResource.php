<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WebsiteInformationResource\Pages;
use App\Filament\Resources\WebsiteInformationResource\RelationManagers;
use App\Models\WebsiteInformation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WebsiteInformationResource extends Resource
{
    protected static ?string $model = Websiteinformation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Settings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('contact_email')
                    ->email()
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('address')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('facebook_link')
                    ->maxLength(191),
                Forms\Components\TextInput::make('x_link')
                    ->maxLength(191),
                Forms\Components\TextInput::make('instagram')
                    ->maxLength(191),
                Forms\Components\TextInput::make('linked_in')
                    ->maxLength(191),
                Forms\Components\TextInput::make('projects_counter')
                    ->numeric(),
                Forms\Components\TextInput::make('experience_counter')
                    ->numeric(),
                Forms\Components\TextInput::make('awards_counter')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contact_email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('facebook_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('x_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('instagram')
                    ->searchable(),
                Tables\Columns\TextColumn::make('linked_in')
                    ->searchable(),
                Tables\Columns\TextColumn::make('projects_counter')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('experience_counter')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('awards_counter')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWebsiteInformation::route('/'),
            'create' => Pages\CreateWebsiteInformation::route('/create'),
            'edit' => Pages\EditWebsiteInformation::route('/{record}/edit'),
        ];
    }
}
