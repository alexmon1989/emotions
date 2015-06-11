<!--=== Content Part  ===-->
<div class="container content header-1">

    <div class="row">
        <div class="col-md-3 text-center">
            <a class="logo" href="{{ action('Marketing\HomeController@index') }}">
                <img alt="Logo" src="{{ asset('assets/img/logo1-default.png') }}">
            </a>
        </div>

        <div class="col-md-9">
            <div class="row height-100">
                 <div class="col-md-8 slogan">
                    <p class="lead"><em>Дарите счастливые моменты, они запоминаются!</em></p>
                 </div>

                 <div class="col-md-4">
                    <p><strong>Звоните нам</strong></p>
                    <p class="lead">+7(938) 88 55 110</p>
                    <p class="muted">Мы работаем с 08.00 до 20.00</p>
                 </div>
            </div>

            <div class="row">
                 <div class="col-md-3 col-xs-6 margin-bottom-25 col-md-offset-9 social-links">
                        <a href="https://vk.com/public94991535" target="_blank"><img src="{{ asset('assets/img/social-buttons/vk.png') }}" alt="ВКонтакте"/></a>
                        <a href="https://www.facebook.com/emotions151?fref=ts" target="_blank"><img src="{{ asset('assets/img/social-buttons/facebook.png') }}" alt="Facebook"/></a>
                        <a href="https://instagram.com/Emotions.15rus" target="_blank"><img src="{{ asset('assets/img/social-buttons/instagram.png') }}" alt="Instagram"/></a>
                 </div>
            </div>

            <div class="row">
                 <div class="col-md-9 col-xs-6 margin-bottom-15 col-md-offset-3">
                        <a class="btn-u btn-u-sea rounded-4x {{ Input::get('product_type_id') == 1 ? 'active' : '' }}" href="{{ action('Marketing\ProductsController@getIndex') }}?product_type_id=1"><strong>Подарки-впечатления</strong></a>
                        <a class="btn-u btn-u-sea rounded-4x {{ Input::get('product_type_id') == 2 ? 'active' : '' }}" href="{{ action('Marketing\ProductsController@getIndex') }}?product_type_id=2"><strong>Подарочные сертификаты</strong></a>
                        <a class="btn-u btn-u-sea rounded-4x {{ Input::get('product_type_id') == 3 ? 'active' : '' }}" href="{{ action('Marketing\ProductsController@getIndex') }}?product_type_id=3"><strong>Корпоративные подарки</strong></a>
                 </div>
            </div>
        </div>
    </div>

</div><!--/container-->


<!--=== Header ===-->
<div class="header">
    <div class="container">
        <!-- Toggle get grouped for better mobile display -->
        <button data-target=".navbar-responsive-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="fa fa-bars"></span>
        </button>
        <!-- End Toggle -->
    </div><!--/end container-->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
        <div class="container">
            <ul class="nav navbar-nav">
                <li class="{{ ((is_null(Input::get('price_from')) or is_null(Input::get('price_to'))) and Request::segment(1) == 'products') ? 'active' : '' }}">
                    <a href="{{ action('Marketing\ProductsController@getIndex') }}{{ (is_null(Input::get('product_type_id')) ? '' :  '?product_type_id='.Input::get('product_type_id')) }}"><strong>Все</strong></a>
                </li>
                <li class="{{ (!is_null(Input::get('price_from')) and !is_null(Input::get('price_to')) and Input::get('price_from') >= 0 and Input::get('price_to') <= 1500) ? 'active' : '' }}">
                    <a href="{{ action('Marketing\ProductsController@getIndex') }}?price_from=0&price_to=1500{{ !is_null(Input::get('product_type_id')) ? '&product_type_id='.Input::get('product_type_id') : '' }}"><strong>До 1500 руб.</strong></a>
                </li>
                <li class="{{ (Input::get('price_from') >= 1500 and Input::get('price_to') <= 3000) ? 'active' : '' }}">
                    <a href="{{ action('Marketing\ProductsController@getIndex') }}?price_from=1500&price_to=3000{{ !is_null(Input::get('product_type_id')) ? '&product_type_id='.Input::get('product_type_id') : '' }}"><strong>1500 руб. - 3000 руб.</strong></a>
                </li>
                <li class="{{ (Input::get('price_from') >= 3000 and Input::get('price_to') <= 5000) ? 'active' : '' }}">
                    <a href="{{ action('Marketing\ProductsController@getIndex') }}?price_from=3000&price_to=5000{{ !is_null(Input::get('product_type_id')) ? '&product_type_id='.Input::get('product_type_id') : '' }}"><strong>3000 руб. - 5000 руб.</strong></a>
                </li>
                <li class="{{ (Input::get('price_from') >= 5000 and Input::get('price_to') <= 50000) ? 'active' : '' }}">
                    <a href="{{ action('Marketing\ProductsController@getIndex') }}?price_from=5000&price_to=50000{{ !is_null(Input::get('product_type_id')) ? '&product_type_id='.Input::get('product_type_id') : '' }}"><strong>Свыше 5000 руб.</strong></a>
                </li>
            </ul>
        </div><!--/end container-->
    </div><!--/navbar-collapse-->
</div>
<!--=== End Header ===-->