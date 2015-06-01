<?php

use Emotions\Slider;

// Виджет слайдера
Widget::register('slider', function()
{
    $data['sliders'] = Slider::where('enabled', '=', TRUE)->orderBy('order', 'ASC')->get();

    return view('marketing.widgets.slider', $data);
});