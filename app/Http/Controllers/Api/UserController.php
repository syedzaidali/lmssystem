<?php

namespace App\Http\Controllers\Api;

use App\User;
use Exception;
use Validator;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function studentRegister(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
        if ($validator->passes()) {
            try{
                $store = User::create([
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
                if(!empty($store->id)){
                    $data = $this->userDetail($store->id);
                    return response()->json(['success' => true, 'data' => $data, 'msg' => 'User Registered'],200);
                }
                return response()->json(['success' => false, 'msg' => 'Something went wrong'],422);
            }
            catch(Exception $e){

            }
        }
        return response()->json(['success' => false, 'errors' => $validator->errors()->all()],422);
    }


    public function studentLogin(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|min:8'
        ]);
        if ($validator->passes()) {
            $userdata = array(
                'email' => $request->email,
                'password' => $request->password,
            );
            if (Auth::attempt($userdata)){
                $user = auth()->user();
                $data = $this->userDetail($user->id);
                return response()->json(['success' => true, 'data' => $data],200);
            }
            return response()->json(['success' => false, 'msg' => 'Invalid Email or Password'],401);
        }
        return response()->json(['success' => false, 'errors' => $validator->errors()->all()],422);
    }


    public function userDetail($id){
        $token = Str::random(50);
        User::where('id', $id)->update(['remember_token' => $token]);
        $user = User::where('id', $id)->first();
        $data = ['id' => $id, 'name' => $user->name, 'email' => $user->email, 'phone' => $user->phone,'coins' =>$user->coins,'token' => $user->remember_token];
        return $data;
    }
}
