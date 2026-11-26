<?php

namespace App\Filament\Resources\Features\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ColorEntry;
use Filament\Infolists\Components\ViewEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class FeatureInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /* =====================================
                   INFORMASI FITUR
                ===================================== */

                Section::make('Informasi Fitur')
                    ->description(
                        'Detail informasi fitur utama Akunta.'
                    )
                    ->icon('heroicon-o-document-text')
                    ->schema([

                        TextEntry::make('name')
                            ->label('Nama Fitur')
                            ->weight('bold')
                            ->color('primary'),

                        TextEntry::make('slug')
                            ->label('Slug')
                            ->color('gray'),

                        TextEntry::make('description')
                            ->label('Deskripsi Fitur')
                            ->columnSpanFull(),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),


                /* =====================================
                   TAMPILAN IKON
                ===================================== */

                Section::make('Tampilan Ikon')
                    ->description(
                        'Preview ikon yang digunakan pada fitur Akunta.'
                    )
                    ->icon('heroicon-o-swatch')
                    ->schema([

                        ViewEntry::make('icon')
                            ->label('Preview Ikon')
                            ->view(
                                'filament.tables.columns.feature-icon'
                            ),

                        ColorEntry::make('icon_color')
                            ->label('Warna Ikon'),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),


                /* =====================================
                   INFORMASI PUBLIKASI
                ===================================== */

                Section::make('Informasi Publikasi')
                    ->description(
                        'Status dan pengaturan tampilan fitur pada website.'
                    )
                    ->icon('heroicon-o-cog-6-tooth')
                    ->schema([

                        TextEntry::make('sort_order')
                            ->label('Urutan Tampilan')
                            ->badge()
                            ->color('primary'),

                        TextEntry::make('is_active')
                            ->label('Status Publikasi')
                            ->badge()
                            ->formatStateUsing(
                                fn ($state): string =>
                                    $state ? 'Aktif' : 'Nonaktif'
                            )
                            ->color(
                                fn ($state): string =>
                                    $state ? 'success' : 'gray'
                            ),

                        TextEntry::make('created_at')
                            ->label('Tanggal Dibuat')
                            ->dateTime('d M Y, H:i')
                            ->timezone('Asia/Makassar'),

                        TextEntry::make('updated_at')
                            ->label('Terakhir Diperbarui')
                            ->dateTime('d M Y, H:i')
                            ->timezone('Asia/Makassar'),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),

            ]);
    }
}