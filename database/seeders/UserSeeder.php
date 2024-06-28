<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'          => 'Admin',
                'username'      => 'admin',
                'email'         => 'admin@gmail.com',
                'status'        => 1,
                'role'          => 2,
                'password'      =>Hash::make('111'),
                'email_verified_at'     =>Carbon::now(),
                'created_at'    =>Carbon::now(),
            ],
            [
                'name'          => 'Doctor',
                'username'      => 'doctor',
                'email'         => 'doctor@gmail.com',
                'status'        => 1,
                'role'          => 1,
                'password'      =>Hash::make('111'),
                'email_verified_at'     =>Carbon::now(),
                'created_at'    =>Carbon::now(),
            ],
            [
                'name'          => 'Patein',
                'username'      => 'patein',
                'email'         => 'patein@gmail.com',
                'status'        => 1,
                'role'          => 0,
                'password'      =>Hash::make('111'),
                'email_verified_at'     =>Carbon::now(),
                'created_at'    =>Carbon::now(),
            ],

        ]);
    }
}
