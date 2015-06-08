@if($count > 0)
<li>
    <a href="{{ action('Admin\OrdersListController@getIndex') }}" aria-expanded="false" title="Необработанные заказы">
      <i class="fa fa-shopping-cart"></i>
      <span class="label label-danger">{{ $count }}</span>
    </a>
</li>
@endif