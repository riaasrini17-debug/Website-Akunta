<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    public function run(): void
    {
        // Jangan mengubah data jika tabel sudah terisi.
        if (Feature::exists()) {
            $this->command->info(
                'Data Fitur Utama sudah tersedia. Seeder dilewati.'
            );

            return;
        }

        // Mengambil data awal dari file JSON.
        $features = json_decode(
            file_get_contents(__DIR__ . '/features.json'),
            true,
            512,
            JSON_THROW_ON_ERROR
        );

        // Menyimpan seluruh data awal ke database.
        DB::transaction(function () use ($features) {
            foreach ($features as $feature) {
                Feature::create($feature);
            }
        });

        $this->command->info(
            'Data awal Fitur Utama Akunta berhasil ditambahkan.'
        );
    }
}