<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Zoom;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\ZoomResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ZoomResource\RelationManagers;

class ZoomResource extends Resource
{
    protected static ?string $model = Zoom::class;

    protected static ?string $navigationIcon = 'heroicon-o-film';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                TextInput::make('topic')->required(),
                DateTimePicker::make('start_time')->required(),
                TextInput::make('password')->required(),
            ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('topic'),
                TextColumn::make('password'),
                TextColumn::make('start_time'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('Start Meeting')
                // ->icon('heroicon-o-rocket-launch')
                ->icon('heroicon-o-external-link')
                ->url(fn(Zoom $record)=>route('zoom.start',$record))->openUrlInNewTab(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListZooms::route('/'),
            'create' => Pages\CreateZoom::route('/create'),
            'edit' => Pages\EditZoom::route('/{record}/edit'),
        ];
    }    
}
