<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    public function run()
    {
        DB::table((new User)->getTable())->truncate();

        User::insert([
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => Hash::make('iloveyou'),
                'role_id'        => 1,
                'remember_token' => '',
            ],
            [
                'id'             => 2,
                'name'           => 'Glenn Azuelo',
                'email'          => 'glenn@gmail.com',
                'password'       => Hash::make('iloveyou'),
                'role_id'        => 2,
                'remember_token' => '',
            ],
            // [
            //     'id'             => 2,
            //     'name'           => 'Glenn Azuelo',
            //     'email'          => 'glenn@gmail.com',
            //     'password'       => Hash::make('iloveyou'),
            //     'role_id'        => 2,
            //     'remember_token' => '',
            // ],
            // [
            //     'id'             => 2,
            //     'name'           => 'Princely Cezar',
            //     'email'          => 'prince@gmail.com',
            //     'password'       => Hash::make('iloveyou'),
            //     'role_id'        => 2,
            //     'remember_token' => '',
            // ],
            // [
            //     'id'             => 2,
            //     'name'           => 'Caren autista',
            //     'email'          => 'jude@gmail.com',
            //     'password'       => Hash::make('iloveyou'),
            //     'role_id'        => 2,
            //     'remember_token' => '',
            // ],

            [
                'id'             => 3,
                'name'           => 'Adones Evangelista',
                'email'          => 'adones@gmail.com',
                'password'       => Hash::make('iloveyou'),
                'role_id'        => 3,
                'remember_token' => '',
            ]
        ]);
    }
}
