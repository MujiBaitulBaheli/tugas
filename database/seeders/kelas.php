<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kelas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
        'id' => '12346',
        'fakultas' => 'puji',
        'prodi' => 'Rpl',
        'kelas' => 'S1',
        'isi' => '13',
        'created_at' => new \DateTime ,
        'updated_at' => null
        ];
        \DB::table('table_kelas')->insert ($kelas);
    }
}
