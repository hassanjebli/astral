<?php

namespace App\Filament\Resources\Categories\Tables;

use Filament\Actions\BulkAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Notifications\Notification;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Collection;

class CategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(__('resource.category.fields.name'))
                    ->sortable()
                    ->searchable(),

                TextColumn::make('slug')
                    ->label(__('resource.category.fields.slug'))
                    ->searchable(),

                TextColumn::make('parent.name')
                    ->label(__('resource.category.fields.parent_category'))
                    ->default('—')
                    ->searchable(),

                TextColumn::make('sort')
                    ->label(__('resource.category.fields.sort'))
                    ->numeric()
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label(__('resource.category.fields.is_active'))
                    ->boolean(),

                TextColumn::make('created_at')
                    ->label(__('resource.created_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label(__('resource.updated_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    BulkAction::make('toggle_status')
                        ->label(__('resource.category.actions.toggle_status'))
                        ->action(function (Collection $records) {

                            foreach ($records as $record) {
                                $record->is_active = !$record->is_active;
                                $record->save();
                            }

                            Notification::make()
                                ->title(__('resource.notifications.success.default_title'))
                                ->body(__('resource.notifications.success.default_body'))
                                ->success()
                                ->send();
                        })
                        ->icon(Heroicon::Bolt),
                ]),
            ]);
    }
}
