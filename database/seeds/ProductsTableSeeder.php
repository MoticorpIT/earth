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
					'name' => 'Bali - 100ct Bag',
					'slug' => 'bali-100ct-bag',
					'price' => '0.00',
					'upc' => '710928971084',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Bali - 1kg Bag',
					'slug' => 'bali-1kg-bag',
					'price' => '0.00',
					'upc' => '707129254313',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Bali - 30g Bag',
					'slug' => 'bali-30g-bag',
					'price' => '0.00',
					'upc' => '707129254344',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Bali - 500g Bag',
					'slug' => 'bali-500g-bag',
					'price' => '0.00',
					'upc' => '680044929996',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Bali - 60g Bag',
					'slug' => 'bali-60g-bag',
					'price' => '0.00',
					'upc' => '704438475521',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Bali - 65ct Bag',
					'slug' => 'bali-65ct-bag',
					'price' => '0.00',
					'upc' => '710928971053',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Borneo - 1kg Bag',
					'slug' => 'green-borneo-1kg-bag',
					'price' => '0.00',
					'upc' => '707129254368',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Borneo - 30g Bag',
					'slug' => 'green-borneo-30g-bag',
					'price' => '0.00',
					'upc' => '707129254320',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Borneo - 500g Bag',
					'slug' => 'green-borneo-500g-bag',
					'price' => '0.00',
					'upc' => '680044929934',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Borneo - 65ct Bag',
					'slug' => 'green-borneo-65ct-bag',
					'price' => '0.00',
					'upc' => '680044929675',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Hulu Kapuas  - 1kg Bag',
					'slug' => 'green-hulu-kapuas-1kg-bag',
					'price' => '0.00',
					'upc' => '704438475477',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Hulu Kapuas  - 30g Bag',
					'slug' => 'green-hulu-kapuas-30g-bag',
					'price' => '0.00',
					'upc' => '707129254276',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Hulu Kapuas  - 500g Bag',
					'slug' => 'green-hulu-kapuas-500g-bag',
					'price' => '0.00',
					'upc' => '680044929958',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Hulu Kapuas  - 65ct Bag',
					'slug' => 'green-hulu-kapuas-65ct-bag',
					'price' => '0.00',
					'upc' => '680044929651',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Malay - 1kg Bag',
					'slug' => 'green-malay-1kg-bag',
					'price' => '0.00',
					'upc' => '704438475514',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Malay - 30g Bag',
					'slug' => 'green-malay-30g-bag',
					'price' => '0.00',
					'upc' => '704438475491',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Malay - 500g Bag',
					'slug' => 'green-malay-500g-bag',
					'price' => '0.00',
					'upc' => '680044929989',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Malay - 65ct Bag',
					'slug' => 'green-malay-65ct-bag',
					'price' => '0.00',
					'upc' => '680044929705',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Viatnam - 1kg Bag',
					'slug' => 'green-viatnam-1kg-bag',
					'price' => '0.00',
					'upc' => '704438475507',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Viatnam - 30g Bag',
					'slug' => 'green-viatnam-30g-bag',
					'price' => '0.00',
					'upc' => '704438475484',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Viatnam - 500g Bag',
					'slug' => 'green-viatnam-500g-bag',
					'price' => '0.00',
					'upc' => '680044929972',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Viatnam - 65ct Bag',
					'slug' => 'green-viatnam-65ct-bag',
					'price' => '0.00',
					'upc' => '680044929699',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Maeng Da - 100ct Bag',
					'slug' => 'maeng-da-100ct-bag',
					'price' => '0.00',
					'upc' => '707129254382',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Maeng Da - 150g Bag',
					'slug' => 'maeng-da-150g-bag',
					'price' => '0.00',
					'upc' => '707129254405',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Maeng Da - 1kg Bag',
					'slug' => 'maeng-da-1kg-bag',
					'price' => '0.00',
					'upc' => '707129254450',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Maeng Da - 250g Tub',
					'slug' => 'maeng-da-250g-tub',
					'price' => '0.00',
					'upc' => '707129254399',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Maeng Da - 30ct Bag',
					'slug' => 'maeng-da-30ct-bag',
					'price' => '0.00',
					'upc' => '707129254283',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Maeng Da - 30g Bag',
					'slug' => 'maeng-da-30g-bag',
					'price' => '0.00',
					'upc' => '710928946686',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Maeng Da - 42ct Bottle',
					'slug' => 'maeng-da-42ct-bottle',
					'price' => '0.00',
					'upc' => '710928946679',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Maeng Da - 500ct Bottle',
					'slug' => 'maeng-da-500ct-bottle',
					'price' => '0.00',
					'upc' => '707129254436',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Maeng Da - 500g Bag',
					'slug' => 'maeng-da-500g-bag',
					'price' => '0.00',
					'upc' => '680044929903',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Maeng Da - 60g Bag',
					'slug' => 'maeng-da-60g-bag',
					'price' => '0.00',
					'upc' => '707129254498',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Maeng Da - 65ct Bag',
					'slug' => 'maeng-da-65ct-bag',
					'price' => '0.00',
					'upc' => '707129254375',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Maeng Da - 72ct Bottle',
					'slug' => 'maeng-da-72ct-bottle',
					'price' => '0.00',
					'upc' => '710928946662',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Maeng Da - Complete 9.9 Extract',
					'slug' => 'maeng-da-complete-9.9-extract',
					'price' => '0.00',
					'upc' => '707129254351',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Maeng Da - Earth Kratom 9.9 Extract',
					'slug' => 'maeng-da-earth-kratom-9.9-extract',
					'price' => '0.00',
					'upc' => '704438475422',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Red Hulu Kapuas - 1kg Bag',
					'slug' => 'red-hulu-kapuas-1kg-bag',
					'price' => '0.00',
					'upc' => '704438475460',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Red Hulu Kapuas - 30g Bag',
					'slug' => 'red-hulu-kapuas-30g-bag',
					'price' => '0.00',
					'upc' => '704438475415',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Red Hulu Kapuas - 500g Bag',
					'slug' => 'red-hulu-kapuas-500g-bag',
					'price' => '0.00',
					'upc' => '680044929965',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Red Hulu Kapuas - 65ct Bag',
					'slug' => 'red-hulu-kapuas-65ct-bag',
					'price' => '0.00',
					'upc' => '680044929668',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Red Maeng Da - 1kg Bag',
					'slug' => 'red-maeng-da-1kg-bag',
					'price' => '0.00',
					'upc' => '707129254504',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Red Maeng Da - 30g Bag',
					'slug' => 'red-maeng-da-30g-bag',
					'price' => '0.00',
					'upc' => '707129254290',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Red Maeng Da - 500g Bag',
					'slug' => 'red-maeng-da-500g-bag',
					'price' => '0.00',
					'upc' => '680044929927',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Red Maeng Da - 65ct Bag',
					'slug' => 'red-maeng-da-65ct-bag',
					'price' => '0.00',
					'upc' => '680044929637',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Trainwreck - 1kg Bag',
					'slug' => 'trainwreck-1kg-bag',
					'price' => '0.00',
					'upc' => '707129254481',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Trainwreck - 30g Bag',
					'slug' => 'trainwreck-30g-bag',
					'price' => '0.00',
					'upc' => '707129254467',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Trainwreck - 500g Bag',
					'slug' => 'trainwreck-500g-bag',
					'price' => '0.00',
					'upc' => '680044929897',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Trainwreck - 60g Bag',
					'slug' => 'trainwreck-60g-bag',
					'price' => '0.00',
					'upc' => '707129254474',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Trainwreck - 65ct Bag',
					'slug' => 'trainwreck-65ct-bag',
					'price' => '0.00',
					'upc' => '680044929620',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'White Borneo - 1kg Bag',
					'slug' => 'white-borneo-1kg-bag',
					'price' => '0.00',
					'upc' => '707129254443',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'White Borneo - 30g Bag',
					'slug' => 'white-borneo-30g-bag',
					'price' => '0.00',
					'upc' => '707129254337',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'White Borneo - 500g Bag',
					'slug' => 'white-borneo-500g-bag',
					'price' => '0.00',
					'upc' => '680044929941',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'White Borneo - 65ct Bag',
					'slug' => 'white-borneo-65ct-bag',
					'price' => '0.00',
					'upc' => '680044929682',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'White Maeng Da - 1kg Bag',
					'slug' => 'white-maeng-da-1kg-bag',
					'price' => '0.00',
					'upc' => '707129254511',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'White Maeng Da - 30g Bag',
					'slug' => 'white-maeng-da-30g-bag',
					'price' => '0.00',
					'upc' => '710928971077',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'White Maeng Da - 500g Bag',
					'slug' => 'white-maeng-da-500g-bag',
					'price' => '0.00',
					'upc' => '680044929910',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'White Maeng Da - 65ct Bag',
					'slug' => 'white-maeng-da-65ct-bag',
					'price' => '0.00',
					'upc' => '680044929644',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				]
	        ]
	    );
    }
}
