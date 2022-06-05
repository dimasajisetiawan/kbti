<?php

namespace Database\Seeders;

use App\Models\daftar_pengumpul_tugas;
use App\Models\User;
use App\Models\kelas;
use App\Models\tugas;
use App\Models\matakuliah;
use App\Models\daftar_tugas;
use App\Models\krs;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        User::create([
            'id_user' => '72190345',
            'nama' => 'Dimas Aji Setiawan',
            'email' => 'dimazaji619@gmail.com',
            'password' => bcrypt('12345'),
            'role_users' => '1'
        ]);
        User::create([
            'id_user' => '77777777',
            'nama' => 'Bapak Dosen Umar Bakrie',
            'email' => 'bapackbapack@gmail.com',
            'password' => bcrypt('12345'),
            'role_users' => '0'
        ]);
        matakuliah::create([
            'kode_mk' => 'SI4413',
            'nama' => 'Etika Profesi',
            'sks' => 3
        ]);
        kelas::create([
            'kode_kelas' => 'SI4413',
            'hari' => 'Jumat',
            'jam' => '10.30 - 12.30',
            'kode_mk' => 'SI4413',
            'id_user' => '77777777'
        ]);
        daftar_tugas::create([
            'kode_kelas' => 'SI4413'
        ]);
        tugas::create([
            'kode_tugas' => 'TG4413',
            'keterangan' => 'Tugas ini bersifat kerja kelompok, bobotnya 10%. Penjelasan tugas dapat dilihat pada slide kuliah terakhit ep7_ACM_22.ppt',
            'tanggal_mulai' => '2022-06-05',
            'tanggal_selesai' => '2022-06-06',
            'file_terlampir' => 'quiz_a_2022.docx',
            'id_daftar_tugas' => 1
        ]);
        krs::create([
            'id_user' => '72190345',
            'kode_kelas' => 'SI4413'
        ]);
        daftar_pengumpul_tugas::create([
            'id_user' => '72190345',
            'kode_tugas' => 'TG4413',
            'file_tugas' => '72190345.pdf',

        ]);
    }
}
