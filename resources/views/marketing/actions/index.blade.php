@extends('marketing.layout.master')

@section('page_title')
Акции
@stop

@section('top_content')
@include('marketing.layout.breadcrumbs', [
            'title' => 'Акции',
            'items' => array(
                    array('title' => 'Главная', 'action' => 'Marketing\HomeController@index', 'active' => FALSE),
                    array('title' => 'Акции', 'action' => '', 'active' => TRUE),
            )
        ])
@stop

@section('content')

@if (!empty($actions))
    @foreach($actions as $item)
    <!-- News v3 -->
    <div class="row margin-bottom-20">
        <div class="col-sm-5 sm-margin-bottom-20">
            <img class="img-responsive" src="{{ asset('assets/img/actions/'.$item->file_name) }}" alt="">
        </div>
        <div class="col-sm-7">
            <div class="news-v3">
                <ul class="list-inline posted-info">
                    <li>Создано {{ date('d.m.Y', strtotime($item->created_at)) }}</li>
                </ul>
                <h2><a href="{{ action('Marketing\ActionsController@getShow', array('id' => $item->id)) }}">{{ $item->title }}</a></h2>
                <p>{!! $item->preview_text !!}</p>
            </div>
        </div>
    </div><!--/end row-->
    <!-- End News v3 -->

    <div class="clearfix margin-bottom-20"><hr></div>

    @endforeach

    <!-- Pager -->
    <div class="text-center">
        {!! str_replace('/?', '?', $actions->render()) !!}
    </div>
    <!-- End Pager -->
@else
    <h2>Акции отсутствуют</h2>
@endif

@stop