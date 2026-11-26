<?php

namespace App\Filament\Resources\Features\Pages;

use App\Filament\Resources\Features\FeatureResource;
use App\Models\Feature;
use Filament\Resources\Pages\CreateRecord;

class CreateFeature extends CreateRecord
{
    protected static string $resource = FeatureResource::class;

    // Menentukan urutan fitur secara otomatis
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['sort_order'] = (int) Feature::max('sort_order') + 1;

        return $data;
    }

    // Kembali langsung ke tabel setelah Create
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    // Notifikasi berhasil
    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Fitur berhasil ditambahkan';
    }
}