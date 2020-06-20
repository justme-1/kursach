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
        $faker=Faker::create();
        $descRU=array("Сдаётся квартира на ДЛИТЕЛЬНЫЙ СРОК: из мебели есть все необходимое: вместительный шкаф- купе, угловой диван 2-спальный, телевизор, стиральная машина, холодильник, варочная электрическая поверхность на 4 конфорки, утюг, доска гладильная, мебель для прихожей, а также все остальное, представленное на фото. Имеется лоджия 4 кв. м. Звонить с 19 до 22 ч.",
            "Сдаётся однокомнатная квартира (для граждан РФ) в комфортабельном ЖК Солнечный город. Квартира полностью мебелирована, вся мебель и техника новая, есть всё необходимое для проживания - духовой шкаф, варочная панель и вытяжка,посудомоечная машина, холодильник,стиральная машина. Квартира светлая, с видом на Финский залив.",
            "Сдаётся 1-комнатная квартира от СОБСТВЕННИКА на длительный срок в ЖК Солнечный Город!
Агентам не беспокоить!
Квартира с хорошим ремонтом, современной мебелью и необходимой техникой (холодильник, стиральная машина, электрическая плита, духовка, микроволновая печь, электрический чайник, утюг), есть Wi-Fi.",
            "Сдаётся новая 1-комнатная квартира 35 м.кв. от собственника.
6-й этаж нового дома, ЖК Солнечный город.
2 лифта: грузовой и пассажирский.
Квартира сдаётся с : диван, стенка,шкафы, кухонный гарнитур (собрана нижняя часть) кухонный техники нет, стиральная машина. кухня 10 м.кв., санузел",
            "Сдаётся квартира на ДЛИТЕЛЬНЫЙ СРОК: из мебели есть все необходимое: вместительный шкаф- купе, угловой диван 2-спальный, телевизор, стиральная машина, холодильник, варочная электрическая поверхность на 4 конфорки, утюг, доска гладильная, мебель для прихожей, а также все остальное, представленное на фото. Имеется лоджия 4 кв. м. Звонить с 19 до 22 ч.",
            "Сдаётся однокомнатная квартира (для граждан РФ) в комфортабельном ЖК Солнечный город. Квартира полностью мебелирована, вся мебель и техника новая, есть всё необходимое для проживания - духовой шкаф, варочная панель и вытяжка,посудомоечная машина, холодильник,стиральная машина. Квартира светлая, с видом на Финский залив.",
            "Сдаётся 1-комнатная квартира от СОБСТВЕННИКА на длительный срок в ЖК Солнечный Город!
Агентам не беспокоить!
Квартира с хорошим ремонтом, современной мебелью и необходимой техникой (холодильник, стиральная машина, электрическая плита, духовка, микроволновая печь, электрический чайник, утюг), есть Wi-Fi.",
            "Сдаётся новая 1-комнатная квартира 35 м.кв. от собственника.
6-й этаж нового дома, ЖК Солнечный город.
2 лифта: грузовой и пассажирский.
Квартира сдаётся с : диван, стенка,шкафы, кухонный гарнитур (собрана нижняя часть) кухонный техники нет, стиральная машина. кухня 10 м.кв., санузел",

            "Сдаётся квартира на ДЛИТЕЛЬНЫЙ СРОК: из мебели есть все необходимое: вместительный шкаф- купе, угловой диван 2-спальный, телевизор, стиральная машина, холодильник, варочная электрическая поверхность на 4 конфорки, утюг, доска гладильная, мебель для прихожей, а также все остальное, представленное на фото. Имеется лоджия 4 кв. м. Звонить с 19 до 22 ч.",
            "Сдаётся однокомнатная квартира (для граждан РФ) в комфортабельном ЖК Солнечный город. Квартира полностью мебелирована, вся мебель и техника новая, есть всё необходимое для проживания - духовой шкаф, варочная панель и вытяжка,посудомоечная машина, холодильник,стиральная машина. Квартира светлая, с видом на Финский залив.",
            "Сдаётся 1-комнатная квартира от СОБСТВЕННИКА на длительный срок в ЖК Солнечный Город!
Агентам не беспокоить!
Квартира с хорошим ремонтом, современной мебелью и необходимой техникой (холодильник, стиральная машина, электрическая плита, духовка, микроволновая печь, электрический чайник, утюг), есть Wi-Fi.",
            "Сдаётся новая 1-комнатная квартира 35 м.кв. от собственника.
6-й этаж нового дома, ЖК Солнечный город.
2 лифта: грузовой и пассажирский.
Квартира сдаётся с : диван, стенка,шкафы, кухонный гарнитур (собрана нижняя часть) кухонный техники нет, стиральная машина. кухня 10 м.кв., санузел",

        );
        $descEN=array("Apartment for rent FOR LONG TIME: the furniture has everything you need: a spacious wardrobe, 2-bedroom corner sofa, TV, washing machine, refrigerator, 4 electric hobs, electric iron, ironing board, hallway furniture, and everything else presented in the photo. There is a loggia of 4 square meters. m. Call from 19 to 22 hours",
            "For rent one-room apartment (for citizens of the Russian Federation) in a comfortable residential complex Sunny City. The apartment is fully furnished, all furniture and appliances are new, there is everything necessary for living - an oven, hob and extractor hood, dishwasher, refrigerator, washing machine. The apartment is bright, overlooking the Gulf of Finland.",
            "С1-bedroom apartment is given from the OWNER for a long term in the residential complex Sunny City!Do not disturb the agents!The apartment is in good repair, with modern furniture and necessary equipment (fridge, washing machine, electric stove, oven, microwave, electric kettle, iron), there is Wi-Fi.",
            "For rent a new  from the owner  of a , LCD Solar city elevators: freight and passenger.The apartment is for rent with: sofa, wall, cabinets, kitchen (the lower part is assembled) no kitchen appliances, washing machine. kitchen 10 sq.m., bathroom",
            "Apartment for rent FOR LONG TIME: the furniture has everything you need: a spacious wardrobe, 2-bedroom corner sofa, TV, washing machine, refrigerator, 4 electric hobs, electric iron, ironing board, hallway furniture, and everything else presented in the photo. There is a loggia of 4 square meters. m. Call from 19 to 22 hours",
            "For rent one-room apartment for citizens of the Russian Federation) in a comfortable residential complex Sunny City. The apartment is fully furnished, all furniture and appliances are new, there is everything necessary for living - an oven, hob and extractor hood, dishwasher, refrigerator, washing machine. The apartment is bright, overlooking the Gulf of Finland.",
            "С1-bedroom apartment is given from the OWNER for a long term in the residential complex Sunny City!Do not disturb the agents!The apartment is in good repair, with modern furniture and necessary equipment (fridge, washing machine, electric stove, oven, microwave, electric kettle, iron), there is Wi-Fi.",
            "For rent a new  apartment  from the owner  of a , LCD Solar city. 2 elevators: freight and passenger. The apartment is for rent with: sofa, wall, cabinets, kitchen (the lower part is assembled) no kitchen appliances, washing machine. kitchen 10 sq.m., bathroom",
            "Apartment for rent FOR LONG TIME: the furniture has everything you need: a spacious wardrobe, 2-bedroom corner sofa, TV, washing machine, refrigerator, 4 electric hobs, electric iron, ironing board, hallway furniture, and everything else presented in the photo. There is a loggia of 4 square meters. m. Call from 19 to 22 hours",
            "For rent one-room apartment (for citizens of the Russian Federation) in a comfortable residential complex Sunny City. The apartment is fully furnished, all furniture and appliances are new, there is everything necessary for living - an oven, hob and extractor hood, dishwasher, refrigerator, washing machine. The apartment is bright, overlooking the Gulf of Finland.",
            "С1-bedroom apartment is given from the OWNER for a long term in the residential complex Sunny City!Do not disturb the agents!The apartment is in good repair, with modern furniture and necessary equipment (fridge, washing machine, electric stove, oven, microwave, electric kettle, iron), there is Wi-Fi.",
            "For rent a new  from the owner of a , LCD Solar city.2 elevators: freight and passenger.The apartment is for rent with: sofa, wall, cabinets, kitchen (the lower part is assembled) no kitchen appliances, washing machine. kitchen 10 sq.m., bathroom");
        //$images=['k1'=>'/image/test.jpg','k2'=>'/image/test.jpg','k3'=>'/image/test.jpg','k4'=>'/image/test.jpg'];
        for($i=0;$i<10;$i++){
            $j=$i%3;
            $images=['k1'=>'/image/'.$j.'.jpg','k2'=>'/image/'.$j++.'.jpg','k3'=>'/image/'.$j++.'.jpg','k4'=>'/image/'.$j++.'.jpg'];
            $subject=new Subject;
            $user=User::find(($i%2)+1);
            $subject->lat=44.5419+0.1*$i;
            $subject->long=33.5319+0.1*$i;
            $subject->rooms=$faker->passthrough(mt_rand(1, 6));
            $subject->area=$faker->passthrough(mt_rand(20, 600));
            $subject->type_id=$faker->passthrough(mt_rand(1, 4));
            $subject->price=$faker->passthrough(mt_rand(14000, 150000));
            if($i<7){
                $subject->checked=true;
            }
            $subject->images=json_encode($images);
            $subject->description=$descEN[$i];
            $subject->descriptionRu=$descRU[$i];
            //$subject->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
            $subject->user()->associate( $user);
            $subject->save();
            $subject->users()->attach( User::find($i%2));
        }


    }
}
