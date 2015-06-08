<form role="form" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="box-body">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="send_to_email" value="1" {{ old('send_to_email', Memory::get('orders.send_to_email')) == 1 ? 'checked=""' : ''  }}> Включено
            </label>
        </div>
        <div class="form-group">
            <label for="email_to">Адрес, на который будут отправляться письма с информацией о заказе</label>
            <input type="text" placeholder="Введите E-Mail" id="email_to" name="email_to" class="form-control" value="{{ old('email_to', Memory::get('orders.email_to')) }}">
        </div>
    </div><!-- /.box-body -->

    <div class="box-footer">
        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i>&nbsp;&nbsp;Сохранить</button>
    </div>
</form>