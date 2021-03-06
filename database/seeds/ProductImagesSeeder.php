<?php

use Illuminate\Database\Seeder;
use Emotions\ProductImage;

class ProductImagesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('product_images')->delete();

        ProductImage::create(array(
                'product_id' => 1,
                'file_name' => '1.jpg',
            )
        );

        ProductImage::create(array(
                'product_id' => 1,
                'file_name' => '2.jpg',
            )
        );

    }

}