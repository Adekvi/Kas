<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BulanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bulan = [
            [
                'id' => 1,
                'bulan' => 'Januari'
            ],
            [
                'id' => 2,
                'bulan' => 'Februari'
            ],
            [
                'id' => 3,
                'bulan' => 'Maret'
            ],
            [
                'id' => 4,
                'bulan' => 'April'
            ],
            [
                'id' => 5,
                'bulan' => 'Mei'
            ],
            [
                'id' => 6,
                'bulan' => 'Juni'
            ],
            [
                'id' => 7,
                'bulan' => 'Juli'
            ],
            [
                'id' => 8,
                'bulan' => 'Agustus'
            ],
            [
                'id' => 9,
                'bulan' => 'September'
            ],
            [
                'id' => 10,
                'bulan' => 'Oktober'
            ],
            [
                'id' => 11,
                'bulan' => 'November'
            ],
            [
                'id' => 12,
                'bulan' => 'Desember'
            ],
            [
                'id' => 13,
                'bulan' => '1 Tahun'
            ]
        ];

        foreach ($bulan as $item) {
            \App\Models\Admin\Bulan::create($item);
        }
    }
}
