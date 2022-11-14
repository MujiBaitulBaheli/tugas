<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class mahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa = [
        'nim' => '123456',
        'nama' => 'puji',
        'jurusan' => 'Rpl',
        'prodi' => 'S1',
        'created_at' => new \DateTime ,
        'updated_at' => null
        ];
        \DB::table('table_mahasiswa')->insert ($mahasiswa);
    }
}
