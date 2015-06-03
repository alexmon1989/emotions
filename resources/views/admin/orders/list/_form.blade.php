<form role="form" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="box-body">
        <div class="form-group">
            <label for="name">ФИО</label>
            <input type="text" placeholder="ФИО" id="name" name="name" class="form-control" value="{{ old('name', isset($order) ? $order->name : '') }}">
        </div>

        <div class="form-group">
            <label for="phone">Телефон</label>
            <input type="text" placeholder="Телефон" id="phone" name="phone" class="form-control" value="{{ old('phone', isset($order) ? $order->phone : '') }}">
        </div>

        <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="text" placeholder="E-Mail" id="email" name="email" class="form-control" value="{{ old('email', isset($order) ? $order->email : '') }}">
        </div>

        <div class="form-group">
            <label for="comments">Комментарии</label>
            <textarea id="comments" name="comments" class="form-control ckeditor">{{ old('comments', isset($order) ? $order->comments : '') }}</textarea>
        </div>

        <div class="form-group">
            <label for="product_id">Продукт</label>
            <select class="form-control" name="product_id" id="product_id">
                <option></option>
                @foreach($products as $item)
                    <option value="{{ $item->id }}" {{ old('product_id', isset($order) ? json_decode($order->product_json)->id : NULL) == $item->id ? 'selected=""' : ''  }}>{{ $item->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="email">Стоимость: {{ isset($order) ? json_decode($order->product_json)->price_new . ' руб.' : '' }}</label>
        </div>

        <div class="checkbox">
            <label>
                <input type="checkbox" name="completed" value="1" {{ old('completed', isset($order) ? $order->completed : 0) == 1 ? 'checked=""' : ''  }}> Обработано
            </label>
        </div>
    </div><!-- /.box-body -->

    <div class="box-footer">
        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i>&nbsp;&nbsp;Сохранить</button>
    </div>
</form>