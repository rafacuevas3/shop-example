<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new Faker;
        DB::table('users')->insert([
            'name' => 'Rafael Cuevas',
            'email' => 'rafacuevas3@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
