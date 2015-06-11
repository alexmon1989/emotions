<?php namespace Emotions;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model {

    public function product()
    {
        return $this->belongsTo('Emotions\Product');
    }

}
