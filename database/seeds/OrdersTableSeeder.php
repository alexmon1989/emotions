<?php

use Illuminate\Database\Seeder;
use Emotions\Order;
use Emotions\Product;

class OrdersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('orders')->delete();

        Order::create(array(
                'name' => 'Антон',
                'email' => 'anton@anton.ru',
                'phone' => '12345',
                'comments' => 'Комментарии к заказу',
                'product_json' => Product::find(1)->toJson(),
            )
        );

        Order::create(array(
                'name' => 'Александр',
                'email' => 'alex@alex.ru',
                'phone' => '54321',
                'comments' => 'Комментарии к заказу',
                'product_json' => Product::find(2)->toJson(),
            )
        );
    }

}