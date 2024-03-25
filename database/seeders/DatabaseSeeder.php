<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'username' => "tangerangking01@gmail.com",
            'password' => bcrypt("tangerangking01@gmail.com"),
            'email' => "tangerangking01@gmail.com",
            'namalengkap' =>"tangerangking01@gmail.com",
            'alamat' =>"tangerangking01@gmail.com",
        ]);
    }
}
