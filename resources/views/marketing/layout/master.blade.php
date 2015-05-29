<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<head>
    <title>@yield('page_title', 'Главная') - Эмоции</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel="shortcut" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&subset=cyrillic,latin">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="assets/css/headers/header-default.css">
    <link rel="stylesheet" href="assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/animate.css">
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css') }}">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/css/theme-colors/orange.css">


    <link rel="stylesheet" href="assets/plugins/revolution-slider/rs-plugin/css/settings.css" type="text/css" media="screen">
    <!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/revolution-slider/rs-plugin/css/settings-ie8.css" type="text/css" media="screen"><![endif]-->

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    @include('marketing.layout.top-navbar')

    <div class="boxed-layout container">
        <div class="wrapper">

            @include('marketing.layout.header')

            @include('marketing.widgets.slider')

            @yield('top_content')

            <div class="container content">
                 @yield('content', 'Страница в разработке.')
            </div>


            @include('marketing.layout.footer')

        </div>

    </div>

    <!-- JS Global Compulsory -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/jquery/jquery-migrate.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="assets/plugins/back-to-top.js"></script>
    <script src="assets/plugins/smoothScroll.js"></script>
    <script type="text/javascript" src="assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!-- JS Customization -->
    <script type="text/javascript" src="assets/js/custom.js"></script>

    <!-- JS Page Level -->
    <script src="assets/js/app.js"></script>

    <script type="text/javascript" src="assets/js/plugins/revolution-slider.js"></script>
    <script>
    jQuery(document).ready(function() {
        App.init();
        RevolutionSlider.initRSfullWidth();
    });
    </script>

    <!--[if lt IE 9]>
        <script src="assets/plugins/respond.js"></script>
        <script src="assets/plugins/html5shiv.js"></script>
        <script src="assets/plugins/placeholder-IE-fixes.js"></script>
    <![endif]-->

    <!-- For Background Image -->
    <script type="text/javascript" src="assets/plugins/backstretch/jquery.backstretch.min.js"></script>
    <script type="text/javascript">
        $.backstretch([
          "assets/img/bg/bg.png"
          ])
    </script>
    <!-- End For Background Image -->

</body>

</html>