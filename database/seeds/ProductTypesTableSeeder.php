<?php

use Illuminate\Database\Seeder;
use Emotions\ProductType;

class ProductTypesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('product_types')->delete();


        ProductType::create(array(
                'title' => 'Подарки-впечатления',
            )
        );
        ProductType::create(array(
                'title' => 'Подарочные сертификаты',
            )
        );
        ProductType::create(array(
                'title' => 'Корпоративные подарки',
            )
        );
    }

}