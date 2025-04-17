<?php

namespace App;

use Faker\Factory as FakerFactory;

class GeneratorUsers
{
//    public static function generate($count)
//    {
//        $range = range(1, $count - 2);
//        $numbers = collect($range)->shuffle(1)->toArray();
//
//        $faker = FakerFactory::create();
//        $faker->seed(1234);
//        $users = [];
//        for ($i = 0; $i < $count - 2; $i++) {
//            $users[] = [
//                'id' => $numbers[$i],
//                'firstName' => $faker->firstName,
//                'lastName' => $faker->lastName,
//                'email' => $faker->email
//            ];
//        }
//
//        $users[] = [
//            'id' => 99,
//            'firstName' => $faker->firstName,
//            'lastName' => $faker->lastName,
//            'email' => $faker->email
//        ];
//
//        $users[] = [
//            'id' => 100,
//            'firstName' => $faker->firstName,
//            'lastName' => $faker->lastName,
//            'email' => $faker->email
//        ];
//
//        return $users;
//    }



//                 lesson 13
//=================================================
    public static function generate($count)
    {
        $numbers = range(1, $count);
        shuffle($numbers);

        $faker = \Faker\Factory::create();
        $faker->seed(1);
        $users = [];
        for ($i = 0; $i < $count; $i++) {
            $users[] = [
                'id' => $numbers[$i],
                'firstName' => $faker->firstName,
                'lastName' => $faker->lastName,
                'email' => $faker->email
            ];
        }

        return $users;
    }
}
