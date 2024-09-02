<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Result;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ResultResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ResultResource\RelationManagers;

class ResultResource extends Resource
{
    protected static ?string $model = Result::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('course_name')
                    ->required(),
                TextInput::make('instructor_name')
                    ->required(),
                TextInput::make('daily_addmission'),
                TextInput::make('total_addmission'),
                FileUpload::make('instructor_image')
                    ->directory('form-attachments')
                    ->preserveFilenames()
                    ->image()
                    ->imageEditor()
                    ->imageEditorMode(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('instructor_image'),
                TextColumn::make('course_name')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('instructor_name')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('daily_addmission')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('total_addmission')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
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
            'index' => Pages\ListResults::route('/'),
            'create' => Pages\CreateResult::route('/create'),
            'edit' => Pages\EditResult::route('/{record}/edit'),
        ];
    }
}
