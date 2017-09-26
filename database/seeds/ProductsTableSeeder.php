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
					'name' => 'Red Bali - 100ct Bag',
					'slug' => 'red-bali-100ct-bag',
					'price' => '0.00',
					'upc' => '710928971084',
					'img_url' => '/images/products/red-bali-100ct.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Red Bali - 1kg Bag',
					'slug' => 'red-bali-1kg-bag',
					'price' => '0.00',
					'upc' => '707129254313',
					'img_url' => '/images/products/red-Red bali-1kg.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Red Bali - 30g Bag',
					'slug' => 'red-bali-30g-bag',
					'price' => '0.00',
					'upc' => '707129254344',
					'img_url' => '/images/products/red-Red bali-30g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Red Bali - 500g Bag',
					'slug' => 'red-bali-500g-bag',
					'price' => '0.00',
					'upc' => '680044929996',
					// 'img_url' => '/images/products/red-bali-500g.png',
					'img_url' => '/images/theme/the-watch-1.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Red Bali - 60g Bag',
					'slug' => 'red-bali-60g-bag',
					'price' => '0.00',
					'upc' => '704438475521',
					'img_url' => '/images/products/red-bali-60g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Red Bali - 65ct Bag',
					'slug' => 'red-bali-65ct-bag',
					'price' => '0.00',
					'upc' => '710928971053',
					'img_url' => '/images/products/red-bali-65ct.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Borneo - 1kg Bag',
					'slug' => 'green-borneo-1kg-bag',
					'price' => '0.00',
					'upc' => '707129254368',
					'img_url' => '/images/products/green-borneo-1kg.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Borneo - 30g Bag',
					'slug' => 'green-borneo-30g-bag',
					'price' => '0.00',
					'upc' => '707129254320',
					'img_url' => '/images/products/green-borneo-30g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Borneo - 500g Bag',
					'slug' => 'green-borneo-500g-bag',
					'price' => '0.00',
					'upc' => '680044929934',
					'img_url' => '/images/theme/the-watch-1.png',
					// 'img_url' => '/images/products/green-borneo-500g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Borneo - 65ct Bag',
					'slug' => 'green-borneo-65ct-bag',
					'price' => '0.00',
					'upc' => '680044929675',
					'img_url' => '/images/theme/the-watch-1.png',
					// 'img_url' => '/images/products/green-borneo-65ct.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Hulu Kapuas  - 1kg Bag',
					'slug' => 'green-hulu-kapuas-1kg-bag',
					'price' => '0.00',
					'upc' => '704438475477',
					'img_url' => '/images/products/green-hulu-1kg.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Hulu Kapuas  - 30g Bag',
					'slug' => 'green-hulu-kapuas-30g-bag',
					'price' => '0.00',
					'upc' => '707129254276',
					'img_url' => '/images/products/green-hulu-30g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Hulu Kapuas  - 500g Bag',
					'slug' => 'green-hulu-kapuas-500g-bag',
					'price' => '0.00',
					'upc' => '680044929958',
					'img_url' => '/images/theme/the-watch-1.png',
					// 'img_url' => '/images/products/green-hulu-500g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Hulu Kapuas  - 65ct Bag',
					'slug' => 'green-hulu-kapuas-65ct-bag',
					'price' => '0.00',
					'upc' => '680044929651',
					'img_url' => '/images/theme/the-watch-1.png',
					// 'img_url' => '/images/products/green-hulu-65ct.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Malay - 1kg Bag',
					'slug' => 'green-malay-1kg-bag',
					'price' => '0.00',
					'upc' => '704438475514',
					'img_url' => '/images/products/green-malay-1kg.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Malay - 30g Bag',
					'slug' => 'green-malay-30g-bag',
					'price' => '0.00',
					'upc' => '704438475491',
					'img_url' => '/images/products/green-malay-30g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Malay - 500g Bag',
					'slug' => 'green-malay-500g-bag',
					'price' => '0.00',
					'upc' => '680044929989',
					'img_url' => '/images/theme/the-watch-1.png',
					// 'img_url' => '/images/products/green-malay-500g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Malay - 65ct Bag',
					'slug' => 'green-malay-65ct-bag',
					'price' => '0.00',
					'upc' => '680044929705',
					'img_url' => '/images/theme/the-watch-1.png',
					// 'img_url' => '/images/products/green-malay-65ct.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Viatnam - 1kg Bag',
					'slug' => 'green-viatnam-1kg-bag',
					'price' => '0.00',
					'upc' => '704438475507',
					'img_url' => '/images/products/green-viatnam-1kg.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Viatnam - 30g Bag',
					'slug' => 'green-viatnam-30g-bag',
					'price' => '0.00',
					'upc' => '704438475484',
					'img_url' => '/images/products/green-viatnam-30g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Viatnam - 500g Bag',
					'slug' => 'green-viatnam-500g-bag',
					'price' => '0.00',
					'upc' => '680044929972',
					'img_url' => '/images/theme/the-watch-1.png',
					// 'img_url' => '/images/products/green-viatnam-500g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Viatnam - 65ct Bag',
					'slug' => 'green-viatnam-65ct-bag',
					'price' => '0.00',
					'upc' => '680044929699',
					'img_url' => '/images/theme/the-watch-1.png',
					// 'img_url' => '/images/products/green-viatnam-65ct.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Maeng Da - 100ct Bag',
					'slug' => 'green-maeng-da-100ct-bag',
					'price' => '0.00',
					'upc' => '707129254382',
					'img_url' => '/images/products/green-maeng-da-100ct.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Maeng Da - 150g Bag',
					'slug' => 'green-maeng-da-150g-bag',
					'price' => '0.00',
					'upc' => '707129254405',
					'img_url' => '/images/theme/the-watch-1.png',
					// 'img_url' => '/images/products/green-maeng-da-150g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Maeng Da - 1kg Bag',
					'slug' => 'green-maeng-da-1kg-bag',
					'price' => '0.00',
					'upc' => '707129254450',
					'img_url' => '/images/products/green-maeng-da-1kg.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Maeng Da - 250g Tub',
					'slug' => 'green-maeng-da-250g-tub',
					'price' => '0.00',
					'upc' => '707129254399',
					'img_url' => '/images/products/green-maeng-da-250g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Maeng Da - 30ct Bag',
					'slug' => 'green-maeng-da-30ct-bag',
					'price' => '0.00',
					'upc' => '707129254283',
					'img_url' => '/images/products/green-maeng-da-30ct.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Maeng Da - 30g Bag',
					'slug' => 'green-maeng-da-30g-bag',
					'price' => '0.00',
					'upc' => '710928946686',
					'img_url' => '/images/products/green-maeng-da-30g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Maeng Da - 42ct Bottle',
					'slug' => 'green-maeng-da-42ct-bottle',
					'price' => '0.00',
					'upc' => '710928946679',
					'img_url' => '/images/theme/the-watch-1.png',
					// 'img_url' => '/images/products/green-maeng-da-42ct.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Maeng Da - 500ct Bottle',
					'slug' => 'green-maeng-da-500ct-bottle',
					'price' => '0.00',
					'upc' => '707129254436',
					'img_url' => '/images/products/green-maeng-da-500ct.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Maeng Da - 500g Bag',
					'slug' => 'green-maeng-da-500g-bag',
					'price' => '0.00',
					'upc' => '680044929903',
					'img_url' => '/images/theme/the-watch-1.png',
					// 'img_url' => '/images/products/green-maeng-da-500g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Maeng Da - 60g Bag',
					'slug' => 'green-maeng-da-60g-bag',
					'price' => '0.00',
					'upc' => '707129254498',
					'img_url' => '/images/products/green-maeng-da-60g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Maeng Da - 65ct Bag',
					'slug' => 'green-maeng-da-65ct-bag',
					'price' => '0.00',
					'upc' => '707129254375',
					'img_url' => '/images/products/green-maeng-da-65ct.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Green Maeng Da - 72ct Bottle',
					'slug' => 'green-maeng-da-72ct-bottle',
					'price' => '0.00',
					'upc' => '710928946662',
					'img_url' => '/images/products/green-maeng-da-72ct.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Maeng Da - Complete 9.9 Extract',
					'slug' => 'maeng-da-complete-9.9-extract',
					'price' => '0.00',
					'upc' => '707129254351',
					'img_url' => '/images/products/extract-complete.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Maeng Da - Earth Kratom 9.9 Extract',
					'slug' => 'maeng-da-earth-kratom-9.9-extract',
					'price' => '0.00',
					'upc' => '704438475422',
					'img_url' => '/images/products/extract-earth-kratom.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Red Hulu Kapuas - 1kg Bag',
					'slug' => 'red-hulu-kapuas-1kg-bag',
					'price' => '0.00',
					'upc' => '704438475460',
					'img_url' => '/images/products/red-hulu-1kg.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Red Hulu Kapuas - 30g Bag',
					'slug' => 'red-hulu-kapuas-30g-bag',
					'price' => '0.00',
					'upc' => '704438475415',
					'img_url' => '/images/products/red-hulu-30g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Red Hulu Kapuas - 500g Bag',
					'slug' => 'red-hulu-kapuas-500g-bag',
					'price' => '0.00',
					'upc' => '680044929965',
					'img_url' => '/images/theme/the-watch-1.png',
					// 'img_url' => '/images/products/red-hulu-500g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Red Hulu Kapuas - 65ct Bag',
					'slug' => 'red-hulu-kapuas-65ct-bag',
					'price' => '0.00',
					'upc' => '680044929668',
					'img_url' => '/images/theme/the-watch-1.png',
					// 'img_url' => '/images/products/red-hulu-65ct.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Red Maeng Da - 1kg Bag',
					'slug' => 'red-maeng-da-1kg-bag',
					'price' => '0.00',
					'upc' => '707129254504',
					'img_url' => '/images/products/red-maeng-da-1kg.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Red Maeng Da - 30g Bag',
					'slug' => 'red-maeng-da-30g-bag',
					'price' => '0.00',
					'upc' => '707129254290',
					'img_url' => '/images/products/red-maeng-da-30g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Red Maeng Da - 500g Bag',
					'slug' => 'red-maeng-da-500g-bag',
					'price' => '0.00',
					'upc' => '680044929927',
					'img_url' => '/images/theme/the-watch-1.png',
					// 'img_url' => '/images/products/red-maeng-da-500g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Red Maeng Da - 65ct Bag',
					'slug' => 'red-maeng-da-65ct-bag',
					'price' => '0.00',
					'upc' => '680044929637',
					'img_url' => '/images/theme/the-watch-1.png',
					// 'img_url' => '/images/products/red-maeng-da-65ct.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Trainwreck - 1kg Bag',
					'slug' => 'trainwreck-1kg-bag',
					'price' => '0.00',
					'upc' => '707129254481',
					'img_url' => '/images/products/trainwreck-1kg.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Trainwreck - 30g Bag',
					'slug' => 'trainwreck-30g-bag',
					'price' => '0.00',
					'upc' => '707129254467',
					'img_url' => '/images/products/trainwreck-30g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Trainwreck - 500g Bag',
					'slug' => 'trainwreck-500g-bag',
					'price' => '0.00',
					'upc' => '680044929897',
					'img_url' => '/images/theme/the-watch-1.png',
					// 'img_url' => '/images/products/trainwreck-500g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Trainwreck - 60g Bag',
					'slug' => 'trainwreck-60g-bag',
					'price' => '0.00',
					'upc' => '707129254474',
					'img_url' => '/images/products/trainwreck-60g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'Trainwreck - 65ct Bag',
					'slug' => 'trainwreck-65ct-bag',
					'price' => '0.00',
					'upc' => '680044929620',
					'img_url' => '/images/theme/the-watch-1.png',
					// 'img_url' => '/images/products/trainwreck-65ct.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'White Borneo - 1kg Bag',
					'slug' => 'white-borneo-1kg-bag',
					'price' => '0.00',
					'upc' => '707129254443',
					'img_url' => '/images/products/white-borneo-1kg.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'White Borneo - 30g Bag',
					'slug' => 'white-borneo-30g-bag',
					'price' => '0.00',
					'upc' => '707129254337',
					'img_url' => '/images/products/white-borneo-30g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'White Borneo - 500g Bag',
					'slug' => 'white-borneo-500g-bag',
					'price' => '0.00',
					'upc' => '680044929941',
					'img_url' => '/images/theme/the-watch-1.png',
					// 'img_url' => '/images/products/white-borneo-500g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'White Borneo - 65ct Bag',
					'slug' => 'white-borneo-65ct-bag',
					'price' => '0.00',
					'upc' => '680044929682',
					'img_url' => '/images/theme/the-watch-1.png',
					// 'img_url' => '/images/products/white-borneo-65ct.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'White Maeng Da - 1kg Bag',
					'slug' => 'white-maeng-da-1kg-bag',
					'price' => '0.00',
					'upc' => '707129254511',
					'img_url' => '/images/products/white-maeng-da-1kg.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'White Maeng Da - 30g Bag',
					'slug' => 'white-maeng-da-30g-bag',
					'price' => '0.00',
					'upc' => '710928971077',
					'img_url' => '/images/products/white-maeng-da-30g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'White Maeng Da - 500g Bag',
					'slug' => 'white-maeng-da-500g-bag',
					'price' => '0.00',
					'upc' => '680044929910',
					'img_url' => '/images/theme/the-watch-1.png',
					// 'img_url' => '/images/products/white-maeng-da-500g.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				],
				[
					'name' => 'White Maeng Da - 65ct Bag',
					'slug' => 'white-maeng-da-65ct-bag',
					'price' => '0.00',
					'upc' => '680044929644',
					'img_url' => '/images/theme/the-watch-1.png',
					// 'img_url' => '/images/products/white-maeng-da-65ct.png',
					'description' => 'a long description',
					'short_descript' => 'a short descript',
					'created_at' => date("Y-m-d H:i:s")
				]
	        ]
	    );
    }
}
