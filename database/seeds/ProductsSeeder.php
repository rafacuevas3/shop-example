<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) { 
            DB::table('products')->insert([
                'name' => $faker->company,
                'description' => $faker->paragraph(),
                'price' => rand(19, 100),
                'code' => $faker->uuid,
            ]);
        }
    }
}
