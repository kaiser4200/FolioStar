<?php

use App\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // public function run()
    // {
    //     DB::table('users')->insert([
    //         'name' => "Mahir Shahrier",
    //         'email' => 'abc@gmail.com',
    //         'password' => bcrypt('11111111'),
    //     ]);
    // }


    public function run()
    {
        $faker = Faker::create();

        User::create([
            'name'      =>  $faker->name,
            'email'     =>  'admin@admin.com',
            'password'  =>  bcrypt('password'),
        ]);
    }


}
