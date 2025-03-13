<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IaResource\Pages;
use App\Filament\Resources\IaResource\RelationManagers;
use App\Models\Ia;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IaResource extends Resource
{
    protected static ?string $model = Ia::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(25),
                Select::make('categoria_id')
                    ->label('Categoria')
                    ->relationship('categoria', 'categoria') // Asumiendo que la relación es 'categoria' y el campo a mostrar es 'nombre'
                    ->required(),
                Forms\Components\TextInput::make('url')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('descripcion')
                    ->required()
                    ->maxLength(150),
                FileUpload::make('logo')
                    ->label('Logo')
                    ->required()
                    ->image() // Asegura que solo se suban archivos de imagen
                    ->maxSize(2000) // Tamaño máximo en KB (1 MB en este caso)
                    ->directory('logos') // Carpeta donde se guardará la imagen en el almacenamiento
                    ->visibility('public') // Visibilidad del archivo (público o privado)
                    ->preserveFilenames() // Conserva el nombre original del archivo
                    ->imageResizeTargetWidth('500') // Redimensionar la imagen a un ancho específico
                    ->imageResizeTargetHeight('500'), // Redimensionar la imagen a una altura específica
                
                Forms\Components\Toggle::make('estado')
                    ->required(),
               
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('categoria_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('logo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('descripcion')
                    ->searchable(),
                Tables\Columns\IconColumn::make('estado')
                    ->boolean(),
                Tables\Columns\TextColumn::make('url')
                    ->searchable(),
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
            'index' => Pages\ListIas::route('/'),
            'create' => Pages\CreateIa::route('/create'),
            'edit' => Pages\EditIa::route('/{record}/edit'),
        ];
    }
}
