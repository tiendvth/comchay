<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductClientController extends Controller
{
    public function list(Request $request)
    {
        $query = Product::query();
        $category = $request->get('category');
        $search = $request->get('search');
        $filter = $request->get('filter');
        $price = $request->get('price');
        if ($search || strlen($search) > 0) {
            $query = $query->where('name', 'like', '%' . $search . '%');
        }
        if ($category) {
            $query = $query->where('category_id', $category);
        }
        if ($filter == 1) {
            $query = $query->join('order_details', 'products.id', '=', 'order_details.productId')->select('products.*')->orderBy('quantity', 'DESC');
        }
        if ($filter == 2) {
            $query = $query->orderBy('created_at', 'DESC');
        }
        if ($filter == 3) {
            $query = $query->where('is_featured', '=', 1);
        }
        if ($price == 1) {
            $query = $query->where('price', '<', 50000);
        }
        if ($price == 2) {
            $query = $query->whereBetween('price', [50000, 100000]);
        }
        if ($price == 3) {
            $query = $query->whereBetween('price', [100000, 200000]);
        }
        if ($price == 4) {
            $query = $query->whereBetween('price', [200000, 500000]);
        }
        if ($price == 5) {
            $query = $query->where('price', '>', 500000);
        }
        $product = $query->paginate(12)->appends(['search' => $search, 'filter' => $filter]);
        return view('clients.list', [
            'products' => $product,
            'filter' => $filter,
            'price' => $price
        ]);
    }

    public function detail($id)
    {
        $product = Product::find($id);
        return view('clients.shop-details', [
            'product' => $product
        ]);
    }
}
