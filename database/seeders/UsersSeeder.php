<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username'=>'nmhien',
            'password'=>'nmhien12',
        ]);
        DB::table('users')->insert([
            'username'=>'ntan',
            'password'=>'ntan12',
        ]);
        DB::table('users')->insert([
            'username'=>'nmquan',
            'password'=>'nmquan12',
        ]);
    }
}
