<nav class="navbar navbar-inverse navbar-fixed-top top-nav">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control rounded-4x" placeholder="Поиск...">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ Request::segment(1) == '' || Request::segment(1) == 'home' ? 'active' : '' }}"><a href="{{ action('Marketing\HomeController@index') }}"><i class="fa fa-home"></i> Главная</a></li>
                <li class="{{ Request::segment(1) == 'about' ? 'active' : '' }}"><a href="{{ action('Marketing\AboutController@getIndex') }}"><i class="fa fa-gift"></i> О компании</a></li>
                <li class="{{ Request::segment(1) == 'products' ? 'active' : '' }}"><a href="{{ action('Marketing\ProductsController@getIndex') }}"><i class="fa fa-shopping-cart"></i> Каталог</a></li>
                <li class="{{ Request::segment(1) == 'payments' ? 'active' : '' }}"><a href="{{ action('Marketing\PaymentsController@getIndex') }}"><i class="fa fa-truck"></i> Доставка и оплата</a></li>
                <li class="{{ Request::segment(1) == 'promotions' ? 'active' : '' }}"><a href="#promotions"><i class="fa fa-cube"></i> Наши акции</a></li>
                <li class="{{ Request::segment(1) == 'contacts' ? 'active' : '' }}"><a href="{{ action('Marketing\ContactsController@getIndex') }}"><i class="fa fa-phone"></i> Контакты</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>