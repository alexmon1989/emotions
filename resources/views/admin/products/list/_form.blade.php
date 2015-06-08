<form role="form" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="box-body">
        <div class="form-group">
            <label for="title">Название</label>
            <input type="title" placeholder="Название" id="title" name="title" class="form-control" value="{{ old('title', isset($product) ? $product->title : '') }}">
        </div>

        <div class="form-group">
            <label for="product_type_id">Тип продукта</label>
            <select class="form-control" name="product_type_id" id="product_type_id">
                <option></option>
                @foreach($product_types as $item)
                    <option value="{{ $item->id }}" {{ old('product_type_id', isset($product) ? $product->product_type_id : NULL) == $item->id ? 'selected=""' : ''  }}>{{ $item->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="thumbnail">Изображение</label>
            <input type="file" id="file_name" name="file_name">
            <p class="help-block">Форматы: <b>jpg, png, gif</b>. Размер: <b>973px * 615px</b>. Программа приведёт изображение к этому разрешению автоматически без сохранения пропорций сторон.</p>
        </div>

        <div class="form-group">
            <label for="description_full">Описание полное</label>
            <textarea id="description_full" name="description_full" rows="10" cols="80" class="form-control ckeditor">{{ old('description_full', isset($product) ? $product->description_full : '') }}</textarea>
        </div>

        <div class="form-group">
            <label for="description_short">Описание для главной</label>
            <textarea id="description_short" name="description_short" rows="10" cols="80" class="form-control ckeditor">{{ old('description_short', isset($product) ? $product->description_short : '') }}</textarea>
        </div>

        <div class="form-group">
            <label for="price_new">Цена новая</label>
            <input type="title" placeholder="Цена новая" id="price_new" name="price_new" class="form-control" value="{{ old('price_new', isset($product) ? $product->price_new : '') }}">
        </div>

        <div class="form-group">
            <label for="price_old">Цена старая</label>
            <input type="title" placeholder="Цена старая" id="price_old" name="price_old" class="form-control" value="{{ old('price_old', isset($product) ? $product->price_old : '') }}">
            <p class="help-block">Если старой цены нет, оставьте пустым или введите 0.</p>
        </div>

        <div class="checkbox">
            <label>
                <input type="checkbox" name="enabled" value="1" {{ old('enabled', isset($product) ? $product->enabled : 0) == 1 ? 'checked=""' : ''  }}> Включено
            </label>
        </div>

        <div class="checkbox">
            <label>
                <input type="checkbox" name="is_on_main" value="1" {{ old('is_on_main', isset($product) ? $product->is_on_main : 0) == 1 ? 'checked=""' : ''  }}> На главной
            </label>
        </div>
    </div><!-- /.box-body -->

    <div class="box-footer">
        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i>&nbsp;&nbsp;Сохранить</button>
    </div>
</form>