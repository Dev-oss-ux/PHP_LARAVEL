<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CheckOutController extends Controller
{
    public function index(){
        $countries=DB::table('countries')->get();
        $user_login=User::where('id',Auth::id())->first();
        return view('checkout.index',compact('countries','user_login'));
    }
    public function submitcheckout(Request $request){
       $this->validate($request,[
           'champ'=>'obligatoire',
           'billing_address'=>'obligatoire',
           'billing_city'=>'obligatoire',
           'billing_state'=>'obligatoire',
           'billing_pincode'=>'obligatoire',
           'billing_mobile'=>'obligatoire',
           'shipping_name'=>'obligatoire',
           'shipping_address'=>'obligatoire',
           'shipping_city'=>'obligatoire',
           'shipping_state'=>'obligatoire',
           'shipping_pincode'=>'required',
           'shipping_mobile'=>'required',
       ]);
        $input_data=$request->all();
       $count_shippingaddress=DB::table('delivery_address')->where('users_id',Auth::id())->count();
       if($count_shippingaddress==1){
           DB::table('delivery_address')->where('users_id',Auth::id())->update(['name'=>$input_data['shipping_name'],
               'address'=>$input_data['shipping_address'],
               'city'=>$input_data['shipping_city'],
               'state'=>$input_data['shipping_state'],
               'country'=>$input_data['shipping_country'],
               'pincode'=>$input_data['shipping_pincode'],
               'mobile'=>$input_data['shipping_mobile']]);
       }else{
            DB::table('delivery_address')->insert(['users_id'=>Auth::id(),
                'users_email'=>Session::get('frontSession'),
                'name'=>$input_data['shipping_name'],
                'address'=>$input_data['shipping_address'],
                'city'=>$input_data['shipping_city'],
                'state'=>$input_data['shipping_state'],
                'country'=>$input_data['shipping_country'],
                'pincode'=>$input_data['shipping_pincode'],
                'mobile'=>$input_data['shipping_mobile'],]);
       }
        DB::table('users')->where('id',Auth::id())->update(['name'=>$input_data['billing_name'],
            'address'=>$input_data['billing_address'],
            'city'=>$input_data['billing_city'],
            'state'=>$input_data['billing_state'],
            'country'=>$input_data['billing_country'],
            'pincode'=>$input_data['billing_pincode'],
            'mobile'=>$input_data['billing_mobile']]);
       return redirect('/order-review');

    }
}
