<?php

use Emotions\Slider;
use Emotions\Order;

// Виджет слайдера
Widget::register('slider', function()
{
    $data['sliders'] = Slider::where('enabled', '=', TRUE)->orderBy('order', 'ASC')->get();

    return view('marketing.widgets.slider', $data);
});

// Виджет необработанных заказов
Widget::register('notCompletedOrders', function()
{
    $data['count'] = Order::where('completed', '=', FALSE)->count();

    return view('admin.widgets.not_completed_orders', $data);
});