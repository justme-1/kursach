<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(TypesSeeder::class);
         $this->call(roleSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(FeedBackSeeder::class);
         $this->call(SubjectSeeder::class);
         $this->call(NewsSeeder::class);
    }
}
