<?php

namespace Database\Seeders;

use App\Models\Notulensi;
use App\Models\Siaran;
use App\Models\User;
use App\Models\Arsip;
use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Data Administrator
        User::create([
            'name' => 'Admin RRI Tanjungpinang',
            'email' => 'admin@rri.co.id',
            'password' => Hash::make('admin123')
        ]);

        // Data Siaran
        Siaran::create([
            'kode_siaran' => 'RSR-01',
            'judul' => 'Gema Nusantara: Eksplorasi Budaya dan Musik Tradisional Indonesia',
            'tgl_waktu' => Carbon::create('2024-05-04 12:00:00'),
            'nama_penyiar' => 'Farid'
        ]);

        // Data Notulensi
        Notulensi::create([
            'kode_siaran' => 'RSR-01',
            'notulen' => 'Diskusi tentang alat musik tradisional dari berbagai daerah di Indonesia, seperti Angklung dari Jawa Barat, Sasando dari Nusa Tenggara Timur, dan Tifa dari Papua.
            Pemutaran rekaman suara dari masing-masing alat musik.
            Wawancara singkat dengan seorang ahli musik tradisional, Pak Budi Santoso, yang menjelaskan sejarah dan cara memainkan alat-alat musik tersebut.'
        ]);

        // Data Arsip
        Arsip::create([
            'kode_siaran' => 'RSR-01',
            'file_rekaman' => 'rsr-01.mp3'
        ]);

    }
}
