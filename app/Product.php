<?php namespace Emotions;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	public static function getProductCategorized($forMain = FALSE)
    {
        $arr = array(
            '1500' => [],
            '1500_3000' => [],
            '1500_3000' => [],
            '3000_5000' => [],
            '5000' => [],
        );

        $items = self::where('enabled', '=', TRUE)->orderBy('price_new')->orderBy('title');

        if ($forMain)
        {
            $items = $items->where('is_on_main', '=', TRUE);
        }

        $items = $items->get();

        foreach($items as $item)
        {
            if ($item->price_new <= 1500)
            {
                $arr['1500'][] = $item;
                $arr['1500'][] = $item;
            }

        }

        return $items;
    }

}
