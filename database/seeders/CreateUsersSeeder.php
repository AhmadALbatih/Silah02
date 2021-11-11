<?php

  

use Illuminate\Database\Seeder;

use App\Models\User;

   

class CreateUsersSeeder extends Seeder

{
    public function run()

    {

        $User = [

            [

               'name'=>'Admin',

               'email'=>'admin@itsolutionstuff.com',

               'password'=> bcrypt('123456'),

               'admin'=>'1',

            ],

            [

               'name'=>'User',

               'email'=>'user@itsolutionstuff.com',

               'password'=> bcrypt('123456'),

               'admin'=>'0',

            ],

        ];

  

        foreach ($User as $key => $value) {

            User::create($value);

        }

    }

}