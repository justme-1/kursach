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
        $descRU=array("в особенностиже постоянный количественный рост  занимаемых участниками в  количественный рост и  интересный эксперимент проверки форм развития",
            " организацив особенностиже постоянный количественный рост и сфера нашей активности играет важную роль в формировании позиций, занимаемых участниками в отношении собой интересный эксперимент проверки форм развития",
            " 1-комнатная квартира от СОБСТВЕННИКА на длительныйСолнечный Город! гентам не беспокоить!Квартира с хорошим ремонтом, современной мебелью и  духовка, микроволновая печь, электрический чайник, утюг), есть Wi-Fi.",
            "в особенностиже постоянный количественный рост  занимаемых участниками в  количественный рост и  интересный эксперимент проверки форм развития",
            " организацив особенностиже постоянный количественный рост и сфера нашей активности играет важную роль в формировании позиций, занимаемых участниками в отношении собой интересный эксперимент проверки форм развития",
            " 1-комнатная квартира от СОБСТВЕННИКА на длительныйСолнечный Город! гентам не беспокоить!Квартира с хорошим ремонтом, современной мебелью и  духовка, микроволновая печь, электрический чайник, утюг), есть Wi-Fi.",
            "в особенностиже постоянный количественный рост  занимаемых участниками в  количественный рост и  интересный эксперимент проверки форм развития",
            " организацив особенностиже постоянный количественный рост и сфера нашей активности играет важную роль в формировании позиций, занимаемых участниками в отношении собой интересный эксперимент проверки форм развития",
            " 1-комнатная квартира от СОБСТВЕННИКА на длительныйСолнечный Город! гентам не беспокоить!Квартира с хорошим ремонтом, современной мебелью и  духовка, микроволновая печь, электрический чайник, утюг), есть Wi-Fi.",
            "в особенностиже постоянный количественный рост  занимаемых участниками в  количественный рост и  интересный эксперимент проверки форм развития",
            " организацив особенностиже постоянный количественный рост и сфера нашей активности играет важную роль в формировании позиций, занимаемых участниками в отношении собой интересный эксперимент проверки форм развития",
            " 1-комнатная квартира от СОБСТВЕННИКА на длительныйСолнечный Город! гентам не беспокоить!Квартира с хорошим ремонтом, современной мебелью и  духовка, микроволновая печь, электрический чайник, утюг), есть Wi-Fi.",


        );
        $descEN=array("Apartment for rent FOR LONG TIME: the furniture has everything you need: a spacious wardrobe, 2-bedroom corner sofa, TV, washing machine, refrigerator, 4 electric hobs, electric iron, ironing board, hallway furniture, and everything else presented in the photo. There is a loggia of 4 square meters. m. Call from 19 to 22 hours",
            "For rent one-room apartment (for citizens of the Russian Federation) in a comfortable residential complex Sunny City. The apartment is fully furnished, all furniture and appliances are new, there is everything necessary for living - an oven, hob and extractor hood, dishwasher, refrigerator, washing machine. The apartment is bright, overlooking the Gulf of Finland.",
            "С1-bedroom apartment is given from the OWNER for a long term in the residential complex Sunny City!
Do not disturb the agents!
The apartment is in good repair, with modern furniture and necessary equipment (fridge, washing machine, electric stove, oven, microwave, electric kettle, iron), there is Wi-Fi.",
            "For rent a new 1-room apartment 35 sq.m. from the owner.
6th floor of a new house, LCD Solar city.
2 elevators: freight and passenger.
The apartment is for rent with: sofa, wall, cabinets, kitchen (the lower part is assembled) no kitchen appliances, washing machine. kitchen 10 sq.m., bathroom",
            "Apartment for rent FOR LONG TIME: the furniture has everything you need: a spacious wardrobe, 2-bedroom corner sofa, TV, washing machine, refrigerator, 4 electric hobs, electric iron, ironing board, hallway furniture, and everything else presented in the photo. There is a loggia of 4 square meters. m. Call from 19 to 22 hours",
            "For rent one-room apartment (for citizens of the Russian Federation) in a comfortable residential complex Sunny City. The apartment is fully furnished, all furniture and appliances are new, there is everything necessary for living - an oven, hob and extractor hood, dishwasher, refrigerator, washing machine. The apartment is bright, overlooking the Gulf of Finland.",
            "С1-bedroom apartment is given from the OWNER for a long term in the residential complex Sunny City!
Do not disturb the agents!
The apartment is in good repair, with modern furniture and necessary equipment (fridge, washing machine, electric stove, oven, microwave, electric kettle, iron), there is Wi-Fi.",
            "For rent a new 1-room apartment 35 sq.m. from the owner.
6th floor of a new house, LCD Solar city.
2 elevators: freight and passenger.
The apartment is for rent with: sofa, wall, cabinets, kitchen (the lower part is assembled) no kitchen appliances, washing machine. kitchen 10 sq.m., bathroom",
            "Apartment for rent FOR LONG TIME: the furniture has everything you need: a spacious wardrobe, 2-bedroom corner sofa, TV, washing machine, refrigerator, 4 electric hobs, electric iron, ironing board, hallway furniture, and everything else presented in the photo. There is a loggia of 4 square meters. m. Call from 19 to 22 hours",
            "For rent one-room apartment (for citizens of the Russian Federation) in a comfortable residential complex Sunny City. The apartment is fully furnished, all furniture and appliances are new, there is everything necessary for living - an oven, hob and extractor hood, dishwasher, refrigerator, washing machine. The apartment is bright, overlooking the Gulf of Finland.",
            "С1-bedroom apartment is given from the OWNER for a long term in the residential complex Sunny City!
Do not disturb the agents!
The apartment is in good repair, with modern furniture and necessary equipment (fridge, washing machine, electric stove, oven, microwave, electric kettle, iron), there is Wi-Fi.",
            "For rent a new 1-room apartment 35 sq.m. from the owner.
6th floor of a new house, LCD Solar city.
2 elevators: freight and passenger.
The apartment is for rent with: sofa, wall, cabinets, kitchen (the lower part is assembled) no kitchen appliances, washing machine. kitchen 10 sq.m., bathroom");

        $faker = Faker::create('App\News');
        for($i=0;$i<10;$i++){
            DB::table('News')->insert([
                'news'=>substr($descEN[$i],0,100),
                'newsRu'=>substr($descRU[$i],0,100),
                'header'=>substr($descEN[$i],0,30),
                'headerRu'=>substr($descRU[$i],0,30),
                'image'=>'/image/'.$i%6 .'.jpg',
                'news_short'=>substr($descEN[$i],0,50),
                'news_shortRu'=>substr($descRU[$i],0,50),
                'author'=>$faker->name,
                'created_at'=>$faker->dateTimeBetween('-30 days','+30 days'),
            ]);

        }
    }
}
