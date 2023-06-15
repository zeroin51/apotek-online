<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Obat;
use App\Models\Admin;
use App\Models\Role;
use App\Models\Stock;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Role::create([
            'name' => 'super admin',
        ]);

        Role::create([
            'name' => 'admin',
        ]);

        Role::create([
            'name' => 'Pegawai Senior',
        ]);

        Role::create([
            'name' => 'Pegawai Baru',
        ]);

        Role::create([
            'name' => 'Magang',
        ]);

        Role::create([
            'name' => 'guest',
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'nomor_induk' => '2001194590',
            'role_id' => 1,
        ]);

        User::create([
            'name' => 'David',
            'email' => 'david@gmail.com',
            'password' => bcrypt('david'),
            'nomor_induk' => '2007703',
            'role_id' => 2,
        ]);

        User::create([
            'name' => 'Jamal',
            'email' => 'jamal@gmail.com',
            'password' => bcrypt('jamal'),
            'nomor_induk' => '2004191',
            'role_id' => 3,
        ]);

        User::create([
            'name' => 'Agus',
            'email' => 'agus@gmail.com',
            'password' => bcrypt('agus'),
            'nomor_induk' => '2007993',
            'role_id' => 4,
        ]);

        User::create([
            'name' => 'Putri',
            'email' => 'putri@gmail.com',
            'password' => bcrypt('putri'),
            'nomor_induk' => '2007235',
            'role_id' => 5,
        ]);

        User::create([
            'name' => 'guest1',
            'email' => 'guest1@gmail.com',
            'password' => bcrypt('guest1'),
            'nomor_induk' => '2005668',
            'role_id' => 6,
        ]);

        Obat::create([
            'code' => 'A001',
            'name' => 'Paracetamol',
            'img' => 'obat-image/obatdefault.jpg',
            'description' => 'Paracetamol adalah obat untuk meredakan demam dan nyeri ringan hingga sedang, misalnya sakit kepala, nyeri haid, atau pegal-pegal.',
        ]);

        Obat::create([
            'code' => 'A002',
            'name' => 'Cetirizine',
            'img' => 'obat-image/obatdefault.jpg',
            'description' => 'Cetirizine adalah obat untuk meredakan gejala akibat reaksi alergi, seperti mata berair, bersin-bersin, hidung meler, atau gatal di kulit.',
        ]);

        Obat::create([
            'code' => 'A003',
            'name' => 'Amoxicillin',
            'img' => 'obat-image/obatdefault.jpg',
            'description' => 'Amoxicillin adalah obat antibiotik yang digunakan untuk mengatasi berbagai penyakit akibat infeksi bakteri.',
        ]);

        Stock::create([
            'obat_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 4),
            'addStock_start' => now(),
            'addStock_end' => now(),
            'time_start_fill' => '2023-05-11 08:00:00',
            'time_end_fill' => '2023-05-11 15:00:00',
            'purpose' => 'Habis',
            'status' => 'selesai',
        ]);

        Stock::create([
            'obat_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 4),
            'addStock_start' => now(),
            'addStock_end' => now(),
            'time_start_fill' => '2023-05-11 08:00:00',
            'time_end_fill' => '2023-05-11 15:00:00',
            'purpose' => 'Habis',
            'status' => 'selesai',
        ]);
    }
}
