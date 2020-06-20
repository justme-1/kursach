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
            $data=json_encode(['img'=>'image/first.jpg','header'=>'test','text'=>'supper site']);
            $data1=json_encode(['img'=>'image/images.jpg','header'=>'first','text'=>'problem with download images
           ']);
            $dataRu=json_encode(['img'=>'image/first.jpg','header'=>'test','text'=>'отличный сайт']);
            $data1Ru=json_encode(['img'=>'image/images.jpg','header'=>'first','text'=>'проблема с загрузкой изображений    ']);
            $feedBack->data=$data;
            $feedBack->dataRu=$dataRu;
            $user->feedBacks()->save($feedBack);
            $feedBack1->data=$data1;
            $feedBack1->dataRu=$data1Ru;
            $user2->feedBacks()->save($feedBack1);
        }
    }
}
