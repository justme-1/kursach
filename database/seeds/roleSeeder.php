<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['role'=>'user']);
        Role::create(['role'=>'admin']);
    }
}
