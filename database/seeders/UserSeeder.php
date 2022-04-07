<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //    collect([
    //     [
    //         'name' => 'Azmi Romzi Hoesaini',
    //         'email' => 'azmi@gmail.com',
    //         'password' => bcrypt('password'),
    //         'email_verified_at' => now(),

    //     ]
    //    ])->each(function($user){
    //        User::create($user);
    //    });

       User::factory(10)->create();
    }
}
