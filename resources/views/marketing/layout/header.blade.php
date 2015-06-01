<!--=== Content Part  ===-->
<div class="container content header-1">

    <div class="row">
        <div class="col-md-4 text-center">
            <a class="logo" href="{{ action('Marketing\HomeController@index') }}">
                <img alt="Logo" src="{{ asset('assets/img/logo1-default.png') }}">
            </a>
        </div>

        <div class="col-md-8">
            <div class="row height-100">
                 <div class="col-md-8 slogan">
                    <p class="lead">Дарите счастливые моменты, они запоминаются!</p>
                 </div>

                 <div class="col-md-4">
                    <p><strong>Звоните нам</strong></p>
                    <p class="lead">+7(938)88 55 110</p>
                    <p class="muted">Мы работаем с 08.00 до 20.00</p>
                 </div>
            </div>

            <div class="row">
                 <div class="col-md-3 col-xs-6 margin-bottom-25 col-md-offset-9">
                        <a href="https://vk.com/public94991535" target="_blank" class="btn btn-vk-inversed rounded"><i class="fa fa-vk"></i> ВК</a>
                        <a href="https://www.facebook.com/emotions151?fref=ts" target="_blank" class="btn btn-facebook-inversed rounded"><i class="fa fa-facebook"></i> FB</a>
                 </div>
            </div>

            <div class="row">
                 <div class="col-md-10 col-xs-6 margin-bottom-15 col-md-offset-2">
                        <a class="btn-u btn-u-sea rounded-4x" href="#"><strong>Подарки-впечатления</strong></a>
                        <a class="btn-u btn-u-sea rounded-4x" href="#"><strong>Подарочные сертификаты</strong></a>
                        <a class="btn-u btn-u-sea rounded-4x" href="#"><strong>Корпоративные подарки</strong></a>
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
                <li class="{{ (is_null(Input::get('price_from')) or is_null(Input::get('price_to'))) ? 'active' : '' }}">
                    <a href="{{ action('Marketing\ProductsController@getIndex') }}"><strong>Все</strong></a>
                </li>
                <li class="{{ (!is_null(Input::get('price_from')) and !is_null(Input::get('price_to')) and Input::get('price_from') >= 0 and Input::get('price_to') <= 1500) ? 'active' : '' }}">
                    <a href="{{ action('Marketing\ProductsController@getIndex') }}?price_from=0&price_to=1500"><strong>До 1500 руб.</strong></a>
                </li>
                <li class="{{ (Input::get('price_from') >= 1500 and Input::get('price_to') <= 3000) ? 'active' : '' }}">
                    <a href="{{ action('Marketing\ProductsController@getIndex') }}?price_from=1500&price_to=3000"><strong>1500 руб. - 3000 руб.</strong></a>
                </li>
                <li class="{{ (Input::get('price_from') >= 3000 and Input::get('price_to') <= 5000) ? 'active' : '' }}">
                    <a href="{{ action('Marketing\ProductsController@getIndex') }}?price_from=3000&price_to=5000"><strong>3000 руб. - 5000 руб.</strong></a>
                </li>
                <li class="{{ (Input::get('price_from') >= 5000 and Input::get('price_to') <= 50000) ? 'active' : '' }}">
                    <a href="{{ action('Marketing\ProductsController@getIndex') }}?price_from=5000&price_to=50000"><strong>Свыше 5000 руб.</strong></a>
                </li>
            </ul>
        </div><!--/end container-->
    </div><!--/navbar-collapse-->
</div>
<!--=== End Header ===-->