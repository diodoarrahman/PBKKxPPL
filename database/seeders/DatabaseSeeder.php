<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kosan;
use App\Models\Pemilik;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        $pemilik1 = Pemilik::create([
            'nama_pemilik' => 'Rana',
            'nomor_telpon' => '081234567890'
        ]);

        $kosan1 = Kosan::create([
            'namakosan' => 'Kos Rana 1',
            'kamar_tersedia' => '5',
            'jeniskos' => 'Putri',
            'tenggat_pembayaran' => '2022-10-10',
            'pemilik_id' => $pemilik1->id
        ]);

        $kosan2 = Kosan::create([
            'namakosan' => 'Kos Rana 2',
            'kamar_tersedia' => '5',
            'jeniskos' => 'Putri',
            'tenggat_pembayaran' => '2022-10-10',
            'pemilik_id' => $pemilik1->id
        ]);

        $pemilik2 = Pemilik::create([
            'nama_pemilik' => 'Zilzah',
            'nomor_telpon' => '081234567891'
        ]);

        $kosan3 = Kosan::create([
            'namakosan' => 'Kos Zilzah 1',
            'kamar_tersedia' => '5',
            'jeniskos' => 'Putri',
            'tenggat_pembayaran' => '2022-10-10',
            'pemilik_id' => $pemilik2->id
        ]);

        $kosan4 = Kosan::create([
            'namakosan' => 'Kos Zilzah 2',
            'kamar_tersedia' => '5',
            'jeniskos' => 'Putri',
            'tenggat_pembayaran' => '2022-10-10',
            'pemilik_id' => $pemilik2->id
        ]);
        
    }
}
