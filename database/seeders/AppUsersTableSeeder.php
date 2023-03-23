<?php

namespace Database\Seeders;

use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AppUsersTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('appusers')->delete();
        $users = array([
                'id' => null,
                'username' => 'darthvader',
                'password' => Hash::make('darkforces'),
                'email' => 'darth@star.com',
                'phone' => '123-456-7890',
                'name' => 'Anakin Skywalker'
            ],
             [
                'id' => null,
                'username' => 'kayloren',
                'password' => Hash::make('whatustarted'),
                'email' => 'kaylo@star.com',
                'phone' => '345-543-0098',
                'name' => 'Ben Solo'
            ],
             [
                'id' => null,
                'username' => 'marajade',
                'password' => Hash::make('fortheforce'),
                'email' => 'marajade@rebels.com',
                'phone' => '905-823-3451',
                'name' => 'Mara Jade Skywalker'
            ]);

        DB::table('appusers')->insert($users);
    }
}
