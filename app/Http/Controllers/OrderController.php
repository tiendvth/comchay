<?php

namespace App\Http\Controllers;

use App\Enums\Status;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function save(Request $request) {
        if (!Cart::content() || Cart::count() == 0) {
            return redirect()->route('products')->with('error-msg', 'Hiện tại chưa có sản phẩm nào trong giỏ hàng!');
        }
        $cart = Cart::content();
        $order = new Order();
        $order->totalPrice = 0;
        $order->userId = Auth::check() ? Auth::user()->id : null;
        $order->districtId = $request->district_id;
        $order->wardId = $request->ward_id;
        $order->shipName = $request->shipName;
        $order->shipPhone = $request->shipPhone;
        $order->shipAddress = $request->shipAddress;
        $order->note = $request->note;
        $order->status = Status::WAITING;
        $orderDetails = [];
        $messageError = '';
        foreach ($cart as $item) {
            $product = Product::find($item->id);
            if($product == null){
                $messageError = 'Có lỗi xảy ra, sản phẩm với id'.$item->id.'không tồn tại hoặc đã bị xóa!';
                break;
            }
            $orderDetail = new OrderDetail();
            $orderDetail->productId = $product->id;
            $orderDetail->unitPrice = $product->price;
            $orderDetail->quantity = $item->qty;
            $order->totalPrice += $orderDetail->quantity*$orderDetail->unitPrice;
            array_push($orderDetails,$orderDetail);
        }
        if (count($orderDetails) == 0) {
            return redirect()->route('product')->with('error-msg',$messageError);
        }
        try {
            DB::beginTransaction();
            $order->save();
            $orderDetailArray = [];
            foreach ($orderDetails as $orderDetail){
                $orderDetail->orderId = $order->id;
                array_push($orderDetailArray,$orderDetail->toArray());
            }
            OrderDetail::insert($orderDetailArray);
            DB::commit();
            Cart::destroy();
            if(Auth::check()){
                $this->send_mail($order);
            }
            return redirect()->route('detailOrder',$order->id)->with('success-msg','Bạn đã lưu giỏ hàng thành công.');
        }
        catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }

    public function detail($id){

        $order = Order::where('id', $id)->with(['district', 'ward'])->first();
//        return $order->orderDetails;
        return view('clients.orders',[
            'orders' => $order,
        ]);
    }
    public function send_mail($order){
        $data = [
            'order' => $order,
            'user' => Auth::user(),
        ];
        Mail::send('mails.mail',$data,function ($message){
            $message->from('phuonghdth2009010@outlook.com.vn','Cơm chay');
            $message->to(Auth::user()->email,'Phuong');
            $message->subject('Cơm chay - Đơn hàng mới');
        });
    }
}
