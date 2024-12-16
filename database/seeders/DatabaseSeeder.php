<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '089693612443',
            'password' => bcrypt('P@55word'),
        ]);
        #untuk record berikutnya silahkan, beri nilai berbeda pada nilai: nama, email, hp dengan nilai masing-masing anggota kelompok
        User::create([
            'nama' => 'Arifin Hidayat',
            'email' => 'Arifin@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '089693612443',
            'password' => bcrypt('P@55word'),
        ]);

        #data kategori
        Kategori::create([
            'nama_kategori' => 'Baju',
        ]);
        Kategori::create([
            'nama_kategori' => 'Celana',
        ]);
    }
}