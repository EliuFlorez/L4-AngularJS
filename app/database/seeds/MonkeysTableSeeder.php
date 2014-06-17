<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class MonkeysTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			Monkey::create([
                "name" => $faker->name,
                "email" => $faker->email,
                "username" => $faker->userName
			]);
		}
	}

}