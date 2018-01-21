<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();
        $faker = Factory::create();
        for ($i=0;$i<30;$i++){
            $title = $faker->sentence();
            $data[] =[
                'title'             =>  $title,
                'slug'              =>  str_slug($title),
                'content'           =>  $faker->text(),
                'vote'              => rand(0,10),
                'url_img'           =>  '750x300',
                'is_confirm'        => rand(0,1),
                'fk_user'           =>  rand(1, 101),
                'fk_categorie'      =>  rand(1, 10),
                'created_at'        =>  $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
            ];
        }
        DB::table('posts')->insert($data);
    }
}
