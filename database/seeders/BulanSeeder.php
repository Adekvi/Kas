<?php

namespace Database\Seeders;

use App\Models\Admin\Bulan;
use App\Models\Admin\Tahun;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BulanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tahuns = Tahun::all();

        $daftarBulan = [
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember',
            '1 Tahun'
        ];

        foreach ($tahuns as $tahun) {
            foreach ($daftarBulan as $index => $namaBulan) {
                Bulan::updateOrCreate(
                    [
                        // 'id' => $index + 1,
                        'bulan' => $namaBulan,
                        'tahun_id' => $tahun->id,
                    ],
                    [
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                );
            }
        }
    }
}
