@extends('marketing.layout.master')

@section('page_title')
{{ $action->title }}
@stop

@section('top_content')
@include('marketing.layout.breadcrumbs', [
            'title' => $action->title,
            'items' => array(
                    array('title' => 'Главная', 'action' => 'Marketing\HomeController@index', 'active' => FALSE),
                    array('title' => 'Акции', 'action' => 'Marketing\ActionsController@getIndex', 'active' => FALSE),
                    array('title' => $action->title, 'action' => '', 'active' => TRUE),
            )
        ])
@stop

@section('content')

<!-- News v3 -->
<div class="news-v3 margin-bottom-30">
    <img class="img-responsive full-width" src="{{ asset('assets/img/actions/'.$action->file_name) }}" alt="">
    <div class="news-v3-in">
        <ul class="list-inline posted-info">
            <li>Создано {{ date('d.m.Y', strtotime($action->created_at)) }}</li>
        </ul>
        <h2><a href="{{ action('Marketing\ActionsController@getShow', array('id' => $action->id)) }}">{{ $action->title }}</a></h2>
        {!! $action->full_text !!}
    </div>
</div>
<!-- End News v3 -->

<h2>Еще новости</h2>
<!-- Authored Blog -->
<div class="row news-v2 margin-bottom-50">
    @foreach($latest_actions as $item)
    <div class="col-sm-4 sm-margin-bottom-30">
        <div class="news-v2-badge">
            <img class="img-responsive" src="{{ asset('assets/img/actions/'.$item->file_name) }}" alt="">
        </div>
        <div class="news-v2-desc">
            <h3><a href="{{ action('Marketing\ActionsController@getShow', array('id' => $item->id)) }}">{{ $item->title }}</a></h3>
            <small>Создано {{ date('d.m.Y', strtotime($item->created_at)) }}</small>
            <p>{{ $item->preview_text }}</p>
        </div>
    </div>
    @endforeach
</div>
<!-- End Authored Blog -->

@stop