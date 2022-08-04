<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'name' => 'João Nunes Rigo',
            'email' => 'joaonunesrigo@gmail.com',
            'password' => Hash::make('1234')

        ]

        );
    }
}
