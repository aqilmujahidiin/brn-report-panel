<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SalesResource\Pages;
use App\Filament\Resources\SalesResource\RelationManagers;
use App\Models\Sales;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SalesResource extends Resource
{
    protected static ?string $model = Sales::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('tanggal')->required(),
            Forms\Components\TextInput::make('budget_iklan')
                ->numeric()
                ->required(),
            Forms\Components\TextInput::make('lead')
                ->integer()
                ->required(),
            Forms\Components\TextInput::make('closing')
                ->integer()
                ->required(),
            Forms\Components\TextInput::make('botol')
                ->integer()
                ->required(),
            Forms\Components\TextInput::make('omset')
                ->numeric()
                ->required(),
            Forms\Components\TextInput::make('target_omset')
                ->numeric()
                ->required(),
            Forms\Components\TextInput::make('nama_produk')
                ->required(),
            Forms\Components\TextInput::make('nama_divisi')
                ->required(),
            Forms\Components\TextInput::make('pt')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tanggal')
                ->date()
                ->sortable(),
            Tables\Columns\TextColumn::make('budget_iklan')
                ->money('IDR')
                ->sortable(),
            Tables\Columns\TextColumn::make('lead')
                ->sortable(),
            Tables\Columns\TextColumn::make('closing')
                ->sortable(),
            Tables\Columns\TextColumn::make('botol')
                ->sortable(),
            Tables\Columns\TextColumn::make('omset')
                ->money('IDR')
                ->sortable(),
            Tables\Columns\TextColumn::make('target_omset')
                ->money('IDR')
                ->sortable(),
            Tables\Columns\TextColumn::make('nama_produk')
                ->searchable(),
            Tables\Columns\TextColumn::make('nama_divisi')
                ->searchable(),
            Tables\Columns\TextColumn::make('pt')
                ->searchable(),
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
            'index' => Pages\ListSales::route('/'),
            'create' => Pages\CreateSales::route('/create'),
            'edit' => Pages\EditSales::route('/{record}/edit'),
        ];
    }
}
