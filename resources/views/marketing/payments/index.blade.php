@extends('marketing.layout.master')

@section('page_title')
Оплата и доставка
@stop

@section('top_content')

@include('marketing.layout.breadcrumbs', [
            'title' => 'Оплата и доставка',
            'items' => array(
                    array('title' => 'Главная', 'action' => 'Marketing\HomeController@index', 'active' => FALSE),
                    array('title' => 'Оплата и доставка', 'action' => '', 'active' => TRUE),
            )
        ])
@stop

@section('content')

<div class="row margin-bottom-40">
    <div class="col-md-12 md-margin-bottom-40">
        {!! $article->full_text !!}
    </div>
</div><!--/row-->

@stop