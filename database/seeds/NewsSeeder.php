<?php

use Illuminate\Database\Seeder;
use App\News;
use Faker\Factory as Faker;
class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\News');
        for($i=0;$i<10;$i++){
            DB::table('News')->insert([
                'news'=>$faker->text(200),
                'header'=>$faker->text(30),
                'image'=>'/image/test.jpg',
                'news_short'=>$faker->text(50),
                'author'=>$faker->name,
                'created_at'=>$faker->dateTimeBetween('-30 days','+30 days'),
            ]);

        }
    }
}
