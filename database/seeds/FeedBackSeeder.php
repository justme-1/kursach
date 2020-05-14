<?php

use Illuminate\Database\Seeder;
use App\FeedBack;
use App\User;
use Eastwest\Json\Facades\Json;
class FeedBackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $feedBack=new FeedBack;
            $feedBack1=new FeedBack;
            $user=User::find(1);
            $user2=User::find(2);
            $data=json_encode(['img'=>'image/test.jpg','header'=>'test','text'=>'test test test']);
            $data1=json_encode(['img'=>'image/test.jpg','header'=>'first','text'=>'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
           ']);
            $feedBack->data=$data;
            $user->feedBacks()->save($feedBack);
            $feedBack1->data=$data1;
            $user2->feedBacks()->save($feedBack1);
        }
    }
}
