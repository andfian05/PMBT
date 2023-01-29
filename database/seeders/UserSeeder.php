<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'nama' => 'Ahmad Faruq',
            'username' => 'mad_faruq15',
            'email' => 'p3t1kj0mb4ng99@gmail.com',
            'password' => Hash::make('Aruq13@admin'),
            'role' => 'Administrator',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'nama' => 'Panitia A',
            'username' => 'panitiaA',
            'email' => 'panitiasatu@gmail.com',
            'password' => Hash::make('Ian21@panitA'),
            'role' => 'Panitia A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'nama' => 'Panitia B',
            'username' => 'panitiaB',
            'email' => 'panitiadua@gmail.com',
            'password' => Hash::make('Athull55@panitB'),
            'role' => 'Panitia B',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'id' => 4,
            'nama' => 'Panitia C',
            'username' => 'panitiaC',
            'email' => 'panitiatiga@gmail.com',
            'password' => Hash::make('Ansyah79@panitC'),
            'role' => 'Panitia C',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'id' => 5,
            'nama' => 'PeTIK Jombang',
            'username' => 'petik_jombang',
            'email' => 'p3t1kjombang@gmail.com',
            'password' => Hash::make('qwerty123'),
            'role' => 'Administrator',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
