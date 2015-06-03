@extends('admin.layout.master')

@section('top_content')
@include('admin.layout.breadcrumbs', [
            'title' => 'Список продуктов',
            'items' => array(
                    array('title' => 'Начало работы', 'action' => 'Admin\DashboardController@getIndex', 'active' => FALSE),
                    array('title' => 'Список заказов', 'action' => '', 'active' => TRUE),
            )
        ])
@stop

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Выбирайте заказ для редактирования</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <table id="data" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ФИО</th>
                    <th>E-Mail</th>
                    <th>Телефон</th>
                    <th>Комментарии</th>
                    <th>Товар</th>
                    <th>Стоимость</th>
                    <th>Статус</th>
                    <th>Создано</th>
                    <th>Последнее редактирование</th>
                    <th>Действия</th>
                </tr>
            </thead>

            <tbody>
                @foreach($orders as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{!! $item->comments !!}</td>
                    <td>{{ json_decode($item->product_json)->title }}</td>
                    <td>{{ json_decode($item->product_json)->price_new }}</td>
                    <td>{!! $item->completed == TRUE ? 'Обработано' : '<strong>Не обработано</strong>' !!}</td>
                    <td>{{ date('d.m.Y H:i:s', strtotime($item->created_at)) }}</td>
                    <td>{{ date('d.m.Y H:i:s', strtotime($item->updated_at)) }}</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-primary btn-sm" href="{{ action('Admin\OrdersListController@getEdit', array('id' => $item->id)) }}" title="Редактировать"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-danger btn-sm item-delete" href="{{ action('Admin\OrdersListController@getDelete', array('id' => $item->id)) }}" title="Удалить"><i class="fa fa-remove"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div><!-- /.box-body -->
    <div class="box-footer">
    </div><!-- /.box-footer-->
</div><!-- /.box -->
@stop