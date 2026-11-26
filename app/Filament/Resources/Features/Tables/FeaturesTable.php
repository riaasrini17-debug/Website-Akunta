<?php

namespace App\Filament\Resources\Features\Tables;

use Filament\Actions\ViewAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Filament\Actions\Action;

class FeaturesTable
{
    public static function configure(Table $table): Table
    {
        return $table

            /* =========================
               TABLE COLUMNS
            ========================= */

            ->columns([

                TextColumn::make('sort_order')
                    ->label('Urutan')
                    ->sortable()
                    ->alignCenter()
                    ->width('70px'),

                TextColumn::make('name')
                    ->label('Nama Fitur')
                    ->weight('bold')
                    ->limit(25)
                    ->tooltip(fn ($record) => $record->name)
                    ->searchable()
                    ->sortable()
                    ->color('primary'),

                TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(35)
                    ->tooltip(fn ($record) => $record->description)
                    ->searchable(),

                ViewColumn::make('icon')
                    ->label('Ikon')
                    ->view('filament.tables.columns.feature-icon')
                    ->alignCenter(),

                TextColumn::make('is_active')
                    ->label('Status')
                    ->badge()
                    ->formatStateUsing(
                        fn ($state): string =>
                            $state ? 'Aktif' : 'Nonaktif'
                    )
                    ->color(
                        fn ($state): string =>
                            $state ? 'success' : 'gray'
                    ),

                TextColumn::make('updated_at')
                    ->label('Terakhir Diperbarui')
                    ->dateTime('d M Y, H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

            ])

            /* =========================
               FILTER
            ========================= */

            ->filters([

                TernaryFilter::make('is_active')
                    ->label('Status Publikasi')
                    ->placeholder('Semua Status')
                    ->trueLabel('Aktif')
                    ->falseLabel('Nonaktif'),

            ])

            /* =========================
               CRUD ACTIONS
            ========================= */

            ->recordActions([

                ViewAction::make()
                    ->label('Lihat')
                    ->icon('heroicon-o-eye')
                    ->color('gray')
                    ->iconButton(),

                EditAction::make()
                    ->label('Edit')
                    ->icon('heroicon-o-pencil-square')
                    ->color('primary')
                    ->iconButton(),

                DeleteAction::make()
                    ->label('Hapus')
                    ->icon('heroicon-o-trash')
                    ->color('danger')
                    ->iconButton()
                    ->requiresConfirmation()
                    ->modalHeading('Hapus Fitur')
                    ->modalDescription(
                        'Apakah Anda yakin ingin menghapus fitur ini?'
                    )
                    ->modalSubmitActionLabel('Ya, Hapus'),

            ])

            /* =========================
               TABLE SETTINGS
            ========================= */

            ->defaultSort('sort_order', 'asc')

            ->reorderable('sort_order')

            ->reorderRecordsTriggerAction(
                fn (Action $action, bool $isReordering) => $action
                    ->button()
                    ->label(
                        $isReordering
                            ? 'Selesai Atur Urutan'
                            : 'Atur Urutan'
                    )
                    ->icon('heroicon-o-arrows-up-down')
                    ->color('primary')
            )
            ->searchPlaceholder('Cari fitur...')
            ->paginated([10, 25, 50])
            ->defaultPaginationPageOption(10)
            ->emptyStateHeading('Belum Ada Fitur')
            ->emptyStateDescription(
                'Tambahkan fitur untuk ditampilkan pada halaman Home Akunta.'
            );
    }
}