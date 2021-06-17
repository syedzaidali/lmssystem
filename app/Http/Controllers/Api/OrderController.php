<?php

namespace App\Http\Controllers\Api;

use App\Cart;
use App\Order;
use Validator;
use App\Course;
use App\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function checkout(Request $request){

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'device_id' => 'required',
        ]);
        if ($validator->passes()) {

            $cart = Cart::where('user_id', $request->user_id)->where('device_id', $request->device_id)->get();

            $total = 0;
            foreach($cart as $index=>$c){
                $course = Course::where('id', $c->course_id)->first();
                $total += $c->quantity * $course->price;
            }
            $order = Order::create([
                'user_id' => $request->user_id,
                'total' => $total,
            ]);


            foreach($cart as $index=>$c2){
                $orderDetails = OrderDetail::create([
                    'order_id' => $order->id,
                    'course_id' => $c2->course_id,
                    'quantity' => $c2->quantity,
                ]);
            }
            return response()->json(['success' => true, 'msg' => 'Thanks for the Order'],200);
        }
        return response()->json(['success' => false, 'errors' => $validator->errors()->all()],422);
    }

    public function myOrders($id){

        $orders = Order::with(array('orderDetails' => function($query){$query->select('order_id','course_id','quantity');}))->where('user_id',$id)->get(['id','user_id','total']);
        return $orders;
    }
}
