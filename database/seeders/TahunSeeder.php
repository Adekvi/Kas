<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TahunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tahun = [
            [
                'id' => 1,
                'tahun' => '2021-2022'
            ],
            [
                'id' => 2,
                'tahun' => '2022-2023'
            ],
            [
                'id' => 3,
                'tahun' => '2023-2024'
            ],
            [
                'id' => 4,
                'tahun' => '2024-2025'
            ],
        ];

        foreach ($tahun as $item) {
            \App\Models\Admin\Tahun::create($item);
        }
    }
}
