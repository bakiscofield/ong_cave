<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nom' => 'John',
            'prenom' => 'Doe',
            'profil' => 'Admin',
            'dateEmbauche' => '2023-01-01',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'nom' => 'John',
            'prenom' => 'Doe',
            'profil' => 'Admin',
            'dateEmbauche' => '2023-01-01',
            'email' => 'user1@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
