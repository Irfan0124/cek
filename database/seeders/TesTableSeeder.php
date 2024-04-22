<?php

namespace Database\Seeders;

use App\Models\Tes;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tesData = [
            ['kelompok' => 'Test 1'],
            ['alamat' => 'Test 2'],
            ['jadwal' => 'Test 3'],
            ['tempat' => 'Test 4'],
        ];

        foreach ($tesData as $data) {
            Tes::create($data);
        } //
    }
}
