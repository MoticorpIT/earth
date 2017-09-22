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
	        		'name' => 'Maeng Da 30g',
					'slug' => 'maeng-da-30g',
					'price' => '14.99',
					'upc' => '996673858837',
					'description' => 'Our something something that is something for easing of something somethings.',
					'short_descript' => '30 grams of Maeng Da Kratom Powder',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
	        		'name' => 'Trainwreck 30g',
					'slug' => 'trainwreck-30g',
					'price' => '14.99',
					'upc' => '384332994349',
					'description' => 'The something something for something that eases the something somethings.',
					'short_descript' => '30 grams of Trainwreck Kratom Powder',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'name' => 'Bali 30g',
					'slug' => 'bali-30g',
					'price' => '14.99',
					'upc' => '722849277483',
					'description' => 'For somethings looking to something in order to ease the something of somethings.',
					'short_descript' => '30 grams of Bali Kratom Powder',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
	        		'name' => 'Red Hulu 30g',
					'slug' => 'red-hulu-30g',
					'price' => '14.99',
					'upc' => '996673858837',
					'description' => 'Our something something that is something for easing of something somethings.',
					'short_descript' => '30 grams of Red Hulu Kratom Powder',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
	        		'name' => 'Green Hulu 30g',
					'slug' => 'green-hulu-30g',
					'price' => '14.99',
					'upc' => '384332994349',
					'description' => 'The something something for something that eases the something somethings.',
					'short_descript' => '30 grams of Green Hulu Kratom Powder',
		            'created_at' => date("Y-m-d H:i:s")
	        	],
	        	[
		            'name' => 'White Borneo 30g',
					'slug' => 'white-borneo-30g',
					'price' => '14.99',
					'upc' => '722849277483',
					'description' => 'For somethings looking to something in order to ease the something of somethings.',
					'short_descript' => '30 grams White Borneo Kratom Powder',
		            'created_at' => date("Y-m-d H:i:s")
	        	]
	        ]
	    );
    }
}
