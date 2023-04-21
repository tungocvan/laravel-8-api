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
        for ($i=1; $i < 9 ; $i++) { 
            DB::table('ntdhoso')->insert([
                'name' => 'Tu Ngoc Van ' .$i,
                'email' => "tungocvan@gmail.com",
                'phone' => "090397194$i",
                'filename' => '0903971949-210423-bm01.pdf',
                'content' => '',
                'status' => 'pending',
                
            ]);
        }
        // DB::table('doctors')->insert([
        //     'name' => 'Tu Ngoc Van',
        //     'email' => 'tungocvan2@gmail.com',
        //     'password' => Hash::make('123456'),
        //     'is_active' => 1
        // ]);
    }
}
