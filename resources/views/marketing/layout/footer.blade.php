<!--=== Footer Version 1 ===-->
<div class="footer-v1">
    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="text-center"><a href="index.html"><img id="logo-footer" class="footer-logo" src="{{ asset('assets/img/logo2-default.png') }}" alt=""></a></div>
                    <p>Подарочные сертификаты – это универсальный и удобный подарок и родным на праздники и дни рождения, и партнеру по бизнесу или коллеге, и своей любимой или любимому. Ведь это гораздо лучше и оригинальнее, чем дарить деньги.</p>
                </div><!--/col-md-3-->
                <!-- End About -->

                <!-- Link List -->
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="headline"><h2>Ссылки</h2></div>
                    <ul class="list-unstyled link-list">
                        <li><a href="{{ action('Marketing\AboutController@getIndex') }}">О компании</a><i class="fa fa-angle-right"></i></li>
                        <li><a href="{{ action('Marketing\ProductsController@getIndex') }}">Каталог</a><i class="fa fa-angle-right"></i></li>
                        <li><a href="{{ action('Marketing\PaymentsController@getIndex') }}">Доставка и оплата</a><i class="fa fa-angle-right"></i></li>
                        <li><a href="{{ action('Marketing\ActionsController@getIndex') }}">Наши акции</a><i class="fa fa-angle-right"></i></li>
                        <li><a href="{{ action('Marketing\ContactsController@getIndex') }}">Контакты</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div><!--/col-md-3-->
                <!-- End Link List -->

                <!-- Address -->
                <div class="col-md-4 map-img md-margin-bottom-40">
                    <div class="headline"><h2>Контакты</h2></div>
                    <address class="md-margin-bottom-40">
                        Телефон: +7(938)88 55 110 <br />
                        Email: <a href="mailto:info@emotions15.ru" class="">info@emotions15.ru</a> <br/>
                        Мы работаем с 08.00 до 20.00<br/><br/>
                    </address>
                </div><!--/col-md-3-->
                <!-- End Address -->
            </div>
        </div>
    </div><!--/footer-->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <p>
                        {{ date('Y') }} &copy; Все права защищены.
                    </p>
                </div>

                <div class="col-md-2 text-center">

                    <!--Openstat-->
                    <span id="openstat2374972"></span>
                    <script type="text/javascript">
                    var openstat = { counter: 2374972, image: 5083, color: "ff9822", next: openstat };
                    (function(d, t, p) {
                    var j = d.createElement(t); j.async = true; j.type = "text/javascript";
                    j.src = ("https:" == p ? "https:" : "http:") + "//openstat.net/cnt.js";
                    var s = d.getElementsByTagName(t)[0]; s.parentNode.insertBefore(j, s);
                    })(document, "script", document.location.protocol);
                    </script>
                    <!--/Openstat-->

                </div>

                <!-- Social Links -->
                <div class="col-md-5">
                    <ul class="footer-socials list-inline">
                        <li>
                            <a href="https://vk.com/public94991535" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="ВКонтакте">
                                <i class="fa fa-vk"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/emotions151?fref=ts" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/emotions15" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagrem">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Social Links -->
            </div>
        </div>
    </div><!--/copyright-->
</div>
<!--=== End Footer Version 1 ===-->