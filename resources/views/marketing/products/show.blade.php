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
    <div class="col-md-6 col-md-offset-3 margin-bottom-15">
        <img class="img-responsive" alt="" src="{{ asset('assets/img/products/'.$product->file_name) }}">
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