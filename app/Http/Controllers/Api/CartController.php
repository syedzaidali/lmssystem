<?php

namespace App\Http\Controllers\Api;

use App\Cart;
use App\User;
use Validator;
use App\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function addToCart(Request $request){

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'course_id' => 'required',
            'quantity' => 'required',
            'device_id' => 'required',
        ]);
        if ($validator->passes()) {

            $course = Course::where('id', $request->course_id)->first('price');
            $user  = User::where('id', $request->user_id)->first('coins');
            if($user->coins >= $course->price){
                $validate = Cart::where('user_id',$request->user_id)->where('course_id', $request->course_id)->first();

                $oldCoins = $user->coins;
                    $price = $course->price;
                    $newCoins = $oldCoins - $price;

                if(!empty($validate)){
                    $update = Cart::where('user_id', $request->user_id)->where('course_id', $request->course_id)->update(['quantity' => $request->quantity+$validate->quantity]);
                    $coinDeduction = User::where('id', $request->user_id)->update(['coins' => $newCoins]);
                    return response()->json(['success' => true, 'msg' => 'cart updated'],200);
                }
                else{
                    $store = Cart::create($request->all());
                    $coinDeduction = User::where('id', $request->user_id)->update(['coins' => $newCoins]);
                    return response()->json(['success' => true, 'msg' => 'item added in cart'],200);
                }
            }
            return response()->json(['success' => true, 'msg' => 'Insufficient coins'],200);
        }
        return response()->json(['success' => false, 'errors' => $validator->errors()->all()],422);
    }

    public function cart(Request $request){
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'device_id' => 'required',
        ]);
        if ($validator->passes()) {
            $cart = Cart::join('courses', 'courses.id', 'carts.course_id')
                        ->where('carts.user_id', $request->user_id)
                        ->where('carts.device_id', $request->device_id)
                        ->get();

            if(!empty($cart)){
                $cartItems = [];
                foreach($cart as $index=>$c){
                    $cartItems[$index]['name'] = $c->name;
                    $cartItems[$index]['quantity'] = $c->quantity;
                    $cartItems[$index]['price'] = $c->price * $c->quantity;
                    $cartItems[$index]['photo'] = $c->photo;
                }
                return response()->json(['success' => true, 'data' => $cartItems,],200);
            }
            return response()->json(['success' => true, 'data' => $cart, 'msg' => 'cart updated'],200);
        }
        return response()->json(['success' => false, 'errors' => $validator->errors()->all()],422);
    }
}
