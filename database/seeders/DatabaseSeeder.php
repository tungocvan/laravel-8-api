<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('doctors')->insert([
            'name' => 'Tu Ngoc Van',
            'email' => 'tungocvan2@gmail.com',
            'password' => Hash::make('123456'),
            'is_active' => 1
        ]);
    }
}
