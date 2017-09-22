<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
	        [
	        	[
	        		'name' => '30g Maeng Da',
					'slug' => '30g-maeng-da',
					'price' => '14.99',
					'description' => 'Our something something that is something for easing of something somethings.',
					'short_descript' => '30g Maeng Da Kratom Powder',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
	        		'name' => '30g Trainwreck',
					'slug' => '30g-trainwreck',
					'price' => '14.99',
					'description' => 'The something something for something that eases the something somethings.',
					'short_descript' => '30g Trainwreck Kratom Powder',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'name' => '30g Bali',
					'slug' => '30g-bali',
					'price' => '14.99',
					'description' => 'For somethings looking to something in order to ease the something of somethings.',
					'short_descript' => '30g Bali Kratom Powder',
		            'created_at' => date("Y-m-d H:i:s")
	        	]
	        ]
	    );
    }
}
