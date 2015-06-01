<?php namespace Emotions;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model {

    public function products()
    {
        return $this->hasMany('Emotions\Product');
    }

}
