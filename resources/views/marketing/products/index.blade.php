@extends('marketing.layout.master')

@section('page_title')
Каталог
@stop

@section('top_content')

@include('marketing.layout.breadcrumbs', [
            'title' => 'Каталог',
            'items' => array(
                    array('title' => 'Главная', 'action' => 'Marketing\HomeController@index', 'active' => FALSE),
                    array('title' => 'Каталог', 'action' => '', 'active' => TRUE),
            )
        ])
@stop

@section('content')

@for($i = 0; $i <= count($products) - 1; $i=$i+3)
<div class="row">
    @for ($j = 0; $j <= 2; $j++)
        @if (isset($products[$i+$j]))
        <div class="col-md-4">
            <div class="thumbnails thumbnail-style">
                 <img alt="{{ $products[$i+$j]->title }}" src="{{ asset('assets/img/products/'.$products[$i+$j]->file_name) }}" class="img-responsive">
                 <div class="caption">
                     <h3><a href="{{ action('Marketing\ProductsController@getShow', ['id'=>$products[$i+$j]->id]) }}" class="hover-effect">{{ $products[$i+$j]->title }}</a></h3>
                     <p>{!! $products[$i+$j]->description_short !!}</p>
                     <p class="tooltips" data-placement="bottom" data-original-title="{{ $products[$i+$j]->what_inside }}"><i class="fa fa-info-circle"></i>&nbsp;&nbsp;<span class="color-dark-blue">Какие впечатления внутри</span></p>
                     <hr class="devider devider-dotted">

                     <div class="row">
                         <div class="col-md-5 text-center">
                            @if($products[$i+$j]->price_old != 0)
                            <p><del>{{ $products[$i+$j]->price_old }} руб.</del></p>
                            @endif
                            <p class="lead {{ $products[$i+$j]->price_old == 0 ? 'margin-top-12' : '' }}">{{ $products[$i+$j]->price_new }} руб.</p>
                         </div>
                         <div class="col-md-7">
                            <a class="btn btn-u btn-u-orange btn-u-lg btn-block rounded-2x make-order" data-id="{{ $products[$i+$j]->id }}" data-title="{{ $products[$i+$j]->title }}" data-toggle="modal" data-target="#responsive" href="#"><i class="fa fa-shopping-cart"></i> Заказать</a>
                         </div>
                     </div>

                     <hr class="devider devider-dotted">
                 </div>
            </div>
        </div>
        @endif
    @endfor
</div>
@endfor

@include('marketing.layout.order_modal')

@stop