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
            'email' => 'faruq_mad15@gmail.com',
            'password' => Hash::make('Aruq13@admin'),
            'role' => 'Administrator',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'nama' => 'Muhammad Fiandra',
            'username' => 'andra11',
            'email' => 'andra17@gmail.com',
            'password' => Hash::make('Ian21@panitA'),
            'role' => 'Panitia A',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'nama' => 'Ahmad Fathullah',
            'username' => 'fathul77',
            'email' => 'mad_athul33@gmail.com',
            'password' => Hash::make('Athull55@panitB'),
            'role' => 'Panitia B',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'id' => 4,
            'nama' => 'Muhammad Firmansyah',
            'username' => 'irman90',
            'email' => 'irman31@gmail.com',
            'password' => Hash::make('Ansyah79@panitC'),
            'role' => 'Panitia C',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
