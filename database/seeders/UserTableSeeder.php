<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Founder',
                'email'=>'founder@test.com',
                'role_id'=>1,
                'password'=> bcrypt('12345678'),
            ],
            [
                'name'=>'General Manager',
                'email'=>'general-manager@test.com',
                'role_id'=>2,
                'password'=> bcrypt('12345678'),
            ],
            [
                'name'=>'Supplier',
                'email'=>'supplier@test.com',
                'role_id'=>3,
                'password'=> bcrypt('12345678'),
            ],
            [
                'name'=>'Distributor',
                'email'=>'distributor@test.com',
                'role_id'=>4,
                'password'=> bcrypt('12345678'),
            ],
            [
                'name'=>'Reseller',
                'email'=>'reseller@test.com',
                'role_id'=>5,
                'password'=> bcrypt('12345678'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
