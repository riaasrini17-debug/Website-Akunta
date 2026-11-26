<?php

namespace App\Filament\Resources\Features\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Hidden;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class FeatureForm
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
                        'Informasi utama fitur yang ditampilkan pada halaman Home Akunta.'
                    )
                    ->icon('heroicon-o-document-text')
                    ->schema([

                        TextInput::make('name')
                            ->label('Nama Fitur')
                            ->placeholder('Contoh: Pembukuan Otomatis')
                            ->required()
                            ->maxLength(100)
                            ->live(onBlur: true)
                            ->afterStateUpdated(
                                function (
                                    Set $set,
                                    ?string $state,
                                    string $operation
                                ): void {
                                    if ($operation === 'create') {
                                        $set(
                                            'slug',
                                            Str::slug($state ?? '')
                                        );
                                    }
                                }
                            )
                            ->columnSpanFull(),

                        Hidden::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true),

                        Textarea::make('description')
                            ->label('Deskripsi Fitur')
                            ->placeholder(
                                'Masukkan deskripsi singkat mengenai fitur...'
                            )
                            ->required()
                            ->rows(3)
                            ->maxLength(250)
                            ->columnSpanFull(),

                    ])
                    ->columnSpanFull(),


                /* =====================================
                   TAMPILAN IKON
                ===================================== */

                Section::make('Tampilan Ikon')
                    ->description(
                        'Atur ikon dan warna yang ditampilkan pada card fitur.'
                    )
                    ->icon('heroicon-o-swatch')
                    ->schema([

                        Select::make('icon')
                            ->label('Ikon Fitur')
                            ->placeholder('Pilih ikon fitur')
                            ->options([
                                'bi-receipt' => 'Pembukuan / Nota',
                                'bi-graph-up-arrow' => 'Laporan Keuangan',
                                'bi-box-seam' => 'Inventori',
                                'bi-cart3' => 'Penjualan',
                                'bi-credit-card' => 'Pembelian',
                                'bi-people' => 'Multi Pengguna',
                                'bi-wallet2' => 'Kas & Bank',
                                'bi-journal-bookmark' => 'Buku Besar',
                                'bi-speedometer2' => 'Dashboard',
                                'bi-building' => 'Perusahaan',
                                'bi-shield-check' => 'Keamanan',
                                'bi-gear' => 'Pengaturan',
                                'bi-database' => 'Database',
                                'bi-clock-history' => 'Riwayat',
                                'bi-file-earmark-text' => 'Dokumen',
                                'bi-calculator' => 'Kalkulator',
                            ])
                            ->searchable()
                            ->required()
                            ->default('bi-receipt'),

                        ColorPicker::make('icon_color')
                            ->label('Warna Ikon')
                            ->default('#FF4B12')
                            ->required()
                            ->helperText(
                                'Warna utama Akunta adalah oranye.'
                            ),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),


                /* =====================================
                   PENGATURAN PUBLIKASI
                ===================================== */

                Section::make('Pengaturan Publikasi')
                    ->description(
                        'Atur status publikasi fitur pada website Akunta.'
                    )
                    ->icon('heroicon-o-cog-6-tooth')
                    ->schema([

                        Toggle::make('is_active')
                            ->label('Status Publikasi')
                            ->default(true)
                            ->onColor('success')
                            ->offColor('gray')
                            ->helperText(
                                'Aktifkan untuk menampilkan fitur pada halaman Home.'
                            ),

                    ])
                    ->columnSpanFull(),

            ]);
    }
}