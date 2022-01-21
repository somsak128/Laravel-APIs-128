<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $data=[
            [
                'name' => 'somsak sakset',
                'email' => 'somsaksakset@gmail.com',
                'password' => Hash::make('118101'),
                'role' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'atinan sakset',
                'email' => 'atinan@gmail.com',
                'password' => Hash::make('622021100'),
                'role' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
        ];

        DB::table('users')->insert($data);
    }
}
