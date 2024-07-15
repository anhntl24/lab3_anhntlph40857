<?php

namespace Database\Seeders;


use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 30; $i++){
            DB::table('books')->insert([
                'title'=>$faker->text(20),
                'thumbnail'=>$faker->imageUrl(),
                'author'=>$faker->name(). ' ' .$faker->lastName(),
                'publisher'=>$faker->text(20),
                'publication'=>$faker->dateTime(),
                'price'=>rand(10,100),
                'quantity'=>rand(10,1000),
                'category_id'=>rand(1,5)
            ]);
        }
    }
}
