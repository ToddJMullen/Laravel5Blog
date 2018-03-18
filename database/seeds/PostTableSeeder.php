<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Faker::create();

		for ($i = 0; $i < 200; $i++) {

			if( $i % 2 == 0 ){

				Post::create([
				   "title"	=> $faker->name()
				   ,"body"	=> $faker->text()
				]);
			}
			else {

				Post::create([
					"title"	=> "$faker->firstName, $faker->monthName"
					,"body"	=> $faker->paragraph(5)
				]);
			}

		}//for( $i )
    }
}
