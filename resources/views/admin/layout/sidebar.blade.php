<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('adminlte/img/admin-avatar.png') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ $auser->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Меню</li>
            <li class="{{ Request::segment(2) == 'dashboard' || Request::segment(2) == '' ? 'active' : '' }}">
                <a href="{{ action('Admin\DashboardController@getIndex') }}">
                    <i class="fa fa-dashboard"></i> <span>Начало работы</span>
                </a>
            </li>
            <li class="{{ Request::segment(2) == 'main-article' ? 'active' : '' }}">
                <a href="{{ action('Admin\MainArticleController@getIndex') }}"><i class="fa fa-building"></i> Главная страница (статья)</a>
            </li>
            <li class="{{ Request::segment(2) == 'about' ? 'active' : '' }}">
                <a href="{{ action('Admin\AboutController@getIndex') }}"><i class="fa fa-building"></i> О Компании</a>
            </li>
            <li class="{{ Request::segment(2) == 'payments' ? 'active' : '' }}">
                <a href="{{ action('Admin\PaymentsController@getIndex') }}"><i class="fa fa-truck"></i> Доставка и оплата</a>
            </li>
            <li class="treeview {{ Request::segment(2) == 'contacts' ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-phone"></i>
                    <span>Контакты</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::segment(3) == 'info' ? 'active' : '' }}">
                        <a href="{{ action('Admin\ContactsInfoController@getIndex') }}"><i class="fa fa-circle-o"></i> Статья и контактные данные</a>
                    </li>
                    <li class="{{ Request::segment(3) == 'messages' ? 'active' : '' }}">
                        <a href="{{ action('Admin\ContactsMessagesController@getIndex') }}"><i class="fa fa-circle-o"></i> Сообщения (настройки)</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::segment(2) == 'actions' ? 'active' : '' }}">
                <a href="{{ action('Admin\ActionsController@getIndex') }}"><i class="fa fa-cube"></i> Акции</a>
            </li>
            <li class="{{ Request::segment(2) == 'slider' ? 'active' : '' }}">
                <a href="{{ action('Admin\SliderController@getIndex') }}"><i class="fa fa-image"></i> Слайдер</a>
            </li>
            <li class="{{ Request::segment(2) == 'products' ? 'active' : '' }}">
                <a href="{{ action('Admin\ProductsController@getIndex') }}"><i class="fa fa-shopping-cart"></i> Продукты</a>
            </li>
            <li class="treeview {{ Request::segment(2) == 'orders' ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-dollar"></i>
                    <span>Заказы</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::segment(3) == 'list' ? 'active' : '' }}">
                        <a href="{{ action('Admin\OrdersListController@getIndex') }}"><i class="fa fa-circle-o"></i> Список заказов</a>
                    </li>
                    <li class="{{ Request::segment(3) == 'settings' ? 'active' : '' }}">
                        <a href="{{ action('Admin\OrdersSettingsController@getIndex') }}"><i class="fa fa-circle-o"></i> Настройки</a>
                    </li>
                </ul>
            </li>

        </ul>

        <ul class="sidebar-menu">
            <li class="header">Ссылки</li>
            <li>
                <a href="{{ action('Marketing\HomeController@index') }}" title="Открыть в новой вкладке" target="_blank">
                    <i class="fa fa-external-link"></i> <span>Перейти на сайт</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>