<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersSeed::class);
         $this->call(CategoriesSeed::class);
         $this->call(PostsSeed::class);
         $this->call(RoleSeed::class);
    }
}
