<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
//use Faker\ORM\Doctrine\Populator;
use App\Item;


class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$gen = Faker::create();

		for( $i = 0; $i < 200; $i++ ){

			Item::create([
				"user_id"		=> rand(1, 30)
				,"date_bought"	=> $gen->dateTimeThisYear()
				,"name"			=> $gen->domainWord()
				,"qty"			=> rand(1, 500 )
				,"price"		=> $gen->randomFloat(4, 0, 7)// rand(1,5) * sin(rand(0,6))
				,"description"	=> $gen->paragraph()//s(2) paragraphs() returns an array
				,"notes"		=> $gen->sentence()//s(2) sentences() returns an array
			]);
		}//for( $i )
    }
}
