<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function create()
    {
        $category = Category::all();
        return view('admin.products.form', ['data' => null, 'category' => $category]);
    }

    public function store(ProductRequest $request)
    {
        $request->validated();

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->image = $request->image;
        $product->save();

        return redirect()->route('listProduct')
            ->with('success', 'Thêm mới thành công.');
    }

    public function list(Request $request)
    {
        $queryBuilder = Product::query()->with(['category']);
        $search = $request->get('search');
        $sort = $request->get('sort');
        $category = $request->get('category');
        if ($search || strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('name', 'like', '%' . $search . '%');
        }
        if ($sort === 1) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'DESC');
        }
        if ($sort === 2) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'ASC');
        }
        if($category){
            $queryBuilder = $queryBuilder->where('category_id',$category);
        }
        $data = $queryBuilder->orderBy('created_at','DESC')->paginate(10)->appends(['search' => $search, 'category' => $category]);
        return view('admin.products.table', [
            'products' => $data,
            'sort' => $sort,
            'categories' => $category
        ]);

    }

    public function edit($id)
    {
        $category = Category::all();
        $products = Product::find($id);
        return view('admin.products.form', ['data' => $products, 'category' => $category]);
    }

    public function save(ProductRequest $request, $id)
    {
        $request->validated();
        $product = Product::find($id);
        $product->image = $request->image;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->is_featured = $request->is_featured;
        $product->save();

        return redirect()->route('listProduct')->with('success', 'Update thành công.');
    }

    public function delete($id)
    {
        $delete = Product::find($id);
        $delete->delete();
        return redirect()->route('listProduct')
            ->with('success', 'Xoá thành công.');
    }
}
