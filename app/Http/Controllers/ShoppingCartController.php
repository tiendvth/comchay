<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Product;
use App\Models\Ward;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function add($id) {
        $product = Product::find($id);
        Cart::add($product->id, $product->name, 1,floatval($product->price), 10, ['image'=>explode(',',$product->image)[0]]);
        return back()->with('add', 'Đã thêm sản phẩm vào giỏ hàng.');
    }
    public function show() {
        $district = District::all();
        return view('clients.shopcart', ['districts'=>$district]);
    }
    public function update(Request $request) {
        $id =$request->get('rowId');
        $quantity =$request->get('quantity');
        Cart::update($id, $quantity);
        return redirect('listCart')->with('update', 'Update sản phẩm thành công.');
    }
    public function remove($rowId) {
        Cart::remove($rowId);
        return redirect('listCart')->with('remove', 'Đã xoá sản phẩm khỏi giỏ hàng.');
    }
    public function destroy() {
        Cart::destroy();
        return redirect('listCart')->with('destroy', 'Đã xoá tất cả sản phẩm khỏi giỏ hàng.');
    }
    public function api($id)
    {
        $ward = Ward::query()->where('maqh',$id)->get();
        return $ward;
    }
}
