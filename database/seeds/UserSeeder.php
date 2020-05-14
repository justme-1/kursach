<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::create([
            'name'=>'Udjin',
            'phone'=>'+79787361924',
            'email'=>'luthenkoev@gmail.com',
            'password'=>bcrypt('joncon21')
        ]);

        $user1=User::create([
            'name'=>'User',
            'phone'=>'+79787361954',
            'email'=>'vvv958@gmail.com',
            'password'=>bcrypt('joncon21')
        ]);
        $user->roles()->attach(2);
        $user->save();
        $user1->roles()->attach(1);
        $user1->save();
    }
}
