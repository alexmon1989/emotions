<?php namespace Emotions;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    public function productType()
    {
        return $this->belongsTo('Emotions\ProductType');
    }

    /**
     * Связь с таблицей `product_images`
     */
    public function images()
    {
        return $this->hasMany('Emotions\ProductImage');
    }

    /**
     * Получение товаров и разбитие их по ценовым категориям
     *
     * @param bool $forMain
     * @return mixed
     */
	public static function getProductCategorized($forMain = FALSE)
    {
        $arr = array(
            '1500' => [],
            '1500_3000' => [],
            '3000_5000' => [],
            '5000' => [],
        );

        $items = self::where('enabled', '=', TRUE)
            ->orderBy('price_new')
            ->orderBy('title');

        if ($forMain)
        {
            $items = $items->where('is_on_main', '=', TRUE);
        }

        $items = $items->get();

        foreach($items as $item)
        {
            if ($item->price_new < 1500)
            {
                $arr['1500'][] = $item;
            }
            if ($item->price_new >= 1500 and $item->price_new < 3000)
            {
                $arr['1500_3000'][] = $item;
            }
            if ($item->price_new >= 3000 and $item->price_new < 5000)
            {
                $arr['3000_5000'][] = $item;
            }
            if ($item->price_new >= 5000)
            {
                $arr['5000'][] = $item;
            }

        }

        return $arr;
    }

}
