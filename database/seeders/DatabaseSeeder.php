<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $kelas = array(
            [
                'kelas' => 'X'
            ],
            [
                'kelas' => 'XI'
            ],
            [
                'kelas' => 'XII'
            ]
        );
        DB::table('kelas')->insert($kelas);

        $jurusan = array(
            [
                'jurusan' => 'RPL'
            ],
            [
                'jurusan' => 'TKJ'
            ],
            [
                'jurusan' => 'MM'
            ],
            [
                'jurusan' => 'PSPT'
            ],
        );
        DB::table('jurusans')->insert($jurusan);

        $siswas = array(
            [
                'nisn' => '0001',
                'nama' => 'Giselia Irianti Putri',
                'kelas_id' => rand(1, 3),
                'jurusan_id' => rand(1, 4),
            ],
            [
                'nisn' => '0002',
                'nama' => 'Rahmat Rizki Firmansyah',
                'kelas_id' => rand(1, 3),
                'jurusan_id' => rand(1, 4),
            ],
            [
                'nisn' => '0003',
                'nama' => 'Moreno Hernakov Cahyono',
                'kelas_id' => rand(1, 3),
                'jurusan_id' => rand(1, 4),
            ],
            [
                'nisn' => '0004',
                'nama' => 'Sultan Agung Pratama',
                'kelas_id' => rand(1, 3),
                'jurusan_id' => rand(1, 4),
            ],
            [
                'nisn' => '0005',
                'nama' => 'Siti',
                'kelas_id' => rand(1, 3),
                'jurusan_id' => rand(1, 4),
            ],
            [
                'nisn' => '0006',
                'nama' => 'Nurul Cleo Santia',
                'kelas_id' => rand(1, 3),
                'jurusan_id' => rand(1, 4),
            ],
        );
        DB::table('siswas')->insert($siswas);
    }
}
