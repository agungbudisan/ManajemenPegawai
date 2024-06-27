<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Seeder;

class pegawai_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pegawai::create([
            'nama' => 'Bejo Sugiantoro',
            'alamat' => 'Surabaya'
        ]);


        Pegawai::factory()->count(10)->create();
    }
}
