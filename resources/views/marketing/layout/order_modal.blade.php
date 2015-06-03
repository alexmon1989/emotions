<!-- Bootstrap Modals With Forms -->
<div class="modal fade" id="responsive" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel4">Оформление заказа</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div style="display: none" id="loading-div" class="text-center">Пожалуйста, подождите, идёт отправка сообщения...<img width="60" src="{{ asset('assets/img/loading.gif') }}" alt="Отправка..."/></div>

                        <div class="alert alert-danger" style="display: none" id="errors-price-div">
                            <h4>Ошибка!</h4>
                            <div id="errors-text"></div>
                        </div>

                        <div class="alert alert-success" style="display: none" id="success-price-div">
                            <h4>Сообщение отправлено!</h4>
                            В ближайшеее время по указанному адресу мы вышлем наш прайс-лист.
                        </div>

                        <h4 class="margin-bottom-10">Название сертификата: <strong><span id="title"></span></strong></h4>

                        <h4>ФИО:</h4>
                        <input type="text" id="name" class="form-control margin-bottom-10" placeholder="Введите ФИО">

                        <h4>E-Mail:</h4>
                        <input type="text" id="email" class="form-control margin-bottom-10" placeholder="Введите E-Mail">

                        <h4>Телефон:</h4>
                        <input type="text" id="phone" class="form-control margin-bottom-10" placeholder="Введите телефон">

                        <h4>Дополнительные комментарии:</h4>
                        <textarea class="form-control margin-bottom-10" id="comments" placeholder="Дополнительные комментарии"></textarea>

                        <input type="hidden" id="product_id" value="" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-u btn-u-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn-u btn-u-primary" id="send_order">Отправить</button>
            </div>
        </div>
    </div>
</div>
<!-- End Bootstrap Modals With Forms -->