<?php

use Illuminate\Database\Seeder;
use Emotions\Product;

class ProductsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('products')->truncate();


        Product::create(array(
                'title' => 'Эмоция 1',
                'description_short' => 'Короткое описание для главной.',
                'description_full' => 'Полное описание.',
                'price_new' => 1000,
                'price_old' => 1500,
                'what_inside' => 'Что внутри.',
                'file_name' => '1.jpg',
                'is_on_main' => TRUE,
                'enabled' => TRUE,
            )
        );


        Product::create(array(
                'title' => 'Эмоция 2',
                'description_short' => 'Короткое описание для главной.',
                'description_full' => 'Полное описание.',
                'price_new' => 1000,
                'price_old' => 1500,
                'what_inside' => 'Что внутри.',
                'file_name' => '2.jpg',
                'is_on_main' => TRUE,
                'enabled' => TRUE,
            )
        );


        Product::create(array(
                'title' => 'Эмоция 3',
                'description_short' => 'Короткое описание для главной.',
                'description_full' => 'Полное описание.',
                'price_new' => 1000,
                'price_old' => 1500,
                'what_inside' => 'Что внутри.',
                'file_name' => '3.jpg',
                'is_on_main' => TRUE,
                'enabled' => TRUE,
            )
        );
    }

}