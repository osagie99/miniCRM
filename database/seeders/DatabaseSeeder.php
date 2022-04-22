<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(1)->create();
        DB::table('users')->insert([
            'name' => 'Osagie',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'isAdmin' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Regular',
            'email' => 'regular@regular.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'isAdmin' => 0,
        ]);

    }
}
