<?php

use Illuminate\Database\Seeder;
use App\Subject;
use App\User;
use Faker\Factory as Faker;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images=['k1'=>'/image/test.jpg','k2'=>'/image/test.jpg','k3'=>'/image/test.jpg','k4'=>'/image/test.jpg'];
        for($i=0;$i<10;$i++){
            $subject=new Subject;
            $user=User::find(($i%2)+1);
            $subject->lat=44.5419+0.1*$i;
            $subject->long=33.5319+0.1*$i;
            $subject->price=20000;
            if($i<7){
                $subject->checked=true;
            }
            $subject->images=json_encode($images);
            $subject->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
            $subject->user()->associate( $user);
            $subject->save();
            $subject->users()->attach( $user);
        }


    }
}
