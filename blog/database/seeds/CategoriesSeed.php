<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        $faker = Factory::create();
        for ($i=0;$i<30;$i++){
            $categorieName = $faker->name();
            $data[] =[
                'title'             =>  $categorieName,
                'slug'                  =>  str_slug($categorieName),
                'is_confirm'            => rand(0,1),
                'created_at'            =>  $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
            ];
        }
        DB::table('categories')->insert($data);
    }
}
