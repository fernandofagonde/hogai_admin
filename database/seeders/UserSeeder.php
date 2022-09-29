<?php

namespace Database\Seeders;

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
            'name' => 'Fernando Fagonde',
            'email' => 'fernando@ipsillon.cc',
            'password' => Hash::make('123456'),
        ]); 
        DB::table('users')->insert([
            'name' => 'Leandro Pires',
            'email' => 'leandro@ipsillon.cc',
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'Luciano Brighenti',
            'email' => 'luciano@hogai.com.br',
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'Usuário Teste',
            'email' => 'usuario@email.com',
            'password' => Hash::make('testehogai'),
        ]);

    }
}
