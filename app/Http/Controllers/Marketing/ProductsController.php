<?php namespace Emotions\Http\Controllers\Marketing;

use Emotions\Http\Requests;
use Emotions\Http\Controllers\Controller;

use Emotions\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller {

	/**
	 * Отображает страницу списка продуктов.
	 *
	 * @return Response
	 */
	public function getIndex(Request $request)
	{
        $products = Product::orderBy('price_new')
                            ->orderBy('title')
                            ->where('enabled', '=', TRUE);

        // Фильтр по цене
        if (!is_null($request->get('price_from')) and !is_null($request->get('price_to')))
        {
            $products = $products->where('price_new', '>=', $request->get('price_from'))
                                 ->where('price_new', '<', $request->get('price_to'));
        }

        if (!is_null($request->get('product_type_id')))
        {
            $products = $products->where('product_type_id', '=', $request->get('product_type_id'));
        }

		return view('marketing.products.index', ['products' => $products->get()]);
	}

    /**
     * Отображает страницу продукта.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function getShow($id)
    {
        $data['product'] = Product::where('enabled', '=', TRUE)->where('id', '=', $id)->first();

        if (empty($data['product']))
        {
            abort(404);
        }

        return view('marketing.products.show', $data);
    }

}
