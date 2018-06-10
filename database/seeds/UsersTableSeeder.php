<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'NamDev',
                'username' => 'NamDev',
                'email' => 'namdevdk2710@gmail.com',
                'password' => bcrypt('01663600396'),
                'remember_token' => str_random(10),
                'role_id' => 1,
                'active' => 1,
            ],
            [
                'name' => 'Nam Designer',
                'username' => 'admin01',
                'email' => 'admin01@gmail.com',
                'password' => bcrypt('01663600396'),
                'remember_token' => str_random(10),
                'role_id' => 2,
                'active' => 1,
            ],
            [
                'name' => 'Nam Manager',
                'username' => 'admin02',
                'email' => 'admin02@gmail.com',
                'password' => bcrypt('01663600396'),
                'remember_token' => str_random(10),
                'role_id' => 3,
                'active' => 1,
            ],
            [
                'name' => 'NamDev',
                'username' => 'admin03',
                'email' => 'admin03@gmail.com',
                'password' => bcrypt('01663600396'),
                'remember_token' => str_random(10),
                'role_id' => 4,
                'active' => 1,
            ],
        ]);
    }
}
