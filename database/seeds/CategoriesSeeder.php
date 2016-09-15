<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 4; $i++) { 
            DB::table('categories')->insert([
                'name' => $faker->name,
                'description' => $faker->paragraph(),
            ]);
        }
    }
}
