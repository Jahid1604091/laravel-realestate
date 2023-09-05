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
            //admin
            [
                'name'=>'Admin',
                'email'=>'admin@yahoo.com',
                'password'=>Hash::make('123456'),
                'role'=>'admin',
                'status'=>'active'
            ],
            //user
            [
                'name'=>'User',
                'email'=>'user@yahoo.com',
                'password'=>Hash::make('123456'),
                'role'=>'user',
                'status'=>'active'
            ],
            //agent
            [
                'name'=>'Agent',
                'email'=>'agent@yahoo.com',
                'password'=>Hash::make('123456'),
                'role'=>'agent',
                'status'=>'inactive'
            ],
        ]);
    }
}
