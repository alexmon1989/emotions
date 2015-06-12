@extends('marketing.layout.master')

@section('page_title')
{{ $product->title }}
@stop

@section('top_content')

@include('marketing.layout.breadcrumbs', [
            'title' => 'Каталог',
            'items' => array(
                    array('title' => 'Главная', 'action' => 'Marketing\HomeController@index', 'active' => FALSE),
                    array('title' => 'Каталог', 'action' => 'Marketing\ProductsController@getIndex', 'active' => FALSE),
                    array('title' => $product->title, 'action' => '', 'active' => TRUE),
            )
        ])
@stop

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="ms-showcase2-template">
            <!-- Master Slider -->
            <div class="master-slider ms-skin-default" id="masterslider">
                @if (count($product->images) > 0)
                @foreach($product->images as $item)
                <div class="ms-slide">
                    <img class="ms-brd" src="{{ asset('assets/img/products/'.$product->id.'/'.$item->file_name) }}" data-src="{{ asset('assets/img/products/'.$product->id.'/'.$item->file_name) }}" alt="">
                    <img class="ms-thumb" src="{{ asset('assets/img/products/'.$product->id.'/'.$item->file_name) }}" alt="thumb">
                </div>
                @endforeach
                @else
                    <div class="ms-slide">
                        <img class="ms-brd" src="{{ asset('assets/img/products/no.jpg') }}" data-src="{{ asset('assets/img/products/no.jpg') }}" alt="">
                        <img class="ms-thumb" src="{{ asset('assets/img/products/no.jpg') }}" alt="thumb">
                    </div>
                @endif
            </div>
            <!-- End Master Slider -->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 product-desc">
        <h2>{{ $product->title }}</h2>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-12 margin-bottom-20 product-desc">
        <h4>Категория:</h4>
        {{ $product->productType->title }}
    </div>
</div>

<div class="row">
    <div class="col-md-12 margin-bottom-20 product-desc">
        <h4>Описание:</h4>
        {!! $product->description_full !!}
    </div>
</div>

<div class="row">
    <div class="col-md-12 margin-bottom-20 product-desc">
        <h4>Цена:</h4>
        {!! $product->price_old != 0 ? '<del>'.$product->price_old.' руб.</del>&nbsp;' : ''!!}<span class="lead">{{ $product->price_new }} руб.</span>
    </div>
</div>

<div class="row">
    <div class="col-md-12 product-desc">
        <a class="btn-u btn-u-orange btn-u-lg rounded make-order" data-id="{{ $product->id }}" data-title="{{ $product->title }}" data-toggle="modal" data-target="#responsive" href="#">Заказать</a>
    </div>
</div>

@include('marketing.layout.order_modal')

@stop

@section('scripts')
<script type="text/javascript" src="{{ asset('assets/plugins/masterslider/masterslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/masterslider/jquery.easing.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/master-slider.js') }}"></script>
<script>
    jQuery(document).ready(function() {
        MasterSliderShowcase2.initMasterSliderShowcase2();
    });
</script>
@stop

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/masterslider/style/masterslider.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/masterslider/skins/default/style.css') }}">
@stop