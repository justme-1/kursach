<?php

use Illuminate\Database\Seeder;
use App\Type;
class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create(['type'=>'apartment']);
        Type::create(['type'=>'house']);
        Type::create(['type'=>'site']);
        Type::create(['type'=>'commercial']);
    }
}
