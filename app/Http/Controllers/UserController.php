<?php

namespace App\Http\Controllers;

use App\Models\BillerInfo;
use App\Models\User;
use App\Models\Deal;
use App\Models\favorite;

use Auth;
use Hash;
use Illuminate\Http\Request;
use Session;

class UserController extends Controller
{
    public function change_password(Request $request){
       
         $request->validate([
            'old_password' => 'required',
            'password' => 'required',
            'confirm_password' => 'required_with:password|same:password',
        ]);
        $user=User::where('id',Auth::user()->id)->first();
        if(Hash::check($request->old_password, $user->password)){
            if($request->password == $request->confirm_password){
                $update = User::find($user->id);
                $update->password = Hash::make($request->password);
                $update->save();
                return back()->with('success','your password has been changed successfully ');

            }else{
                return back()->with('failed','please check your password and confirm password');
            }
        }else{
            return back()->with('failed','Please check your old password');
        }
    }

 
   public function logout(){
    Auth::logout();
    return redirect('login');
   }
    public function index(Request $request) 
    {
       
     $getdeals= Deal::query();
            if($request->category_id && $request->category_id!=1){
                 $getdeals= $getdeals->where('category_id',$request->category_id);
     }
                $getdeals= $getdeals->get();

        return view('index',compact('getdeals'));
    }
    public function login(Request $request){
      
        if($request->submit_register){
            $data= new User;
            $data->first_name = $request->first_name;
            $data->last_name = $request->last_name;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);
            $data->dob = $request->dob;
            $data->gender = $request->gender;
            $data->save();

            return back();
}
        if ($request->submit_login) {
           $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6'
            ]);
            $login = ['email' => $request->email, 'password' => $request->password];
            if (Auth::attempt($login)) {
                return redirect('/');
            }else{
                return back()->with('failed','Please check your email or password');
            }
        }
        return view('login');
    }
        public function about(){
        return view('about');
    }
    public function account_info(){
        return view('account_info');
    }
    public function account_update(Request $request,$id){
         $update = User::find($id);
        if($request->submit){
            $update->first_name = $request->first_name;
            $update->last_name = $request->last_name;
            $update->email = $request->email;
            $update->dob  = $request->dob;
            $update->gender = $request->gender;
            $update->save();
        return redirect('login')->withSuccess('Profie Update'); 
    }
        return view('account_update',compact('update'));
    }
    public function cart(){
        return view('cart');
    }
    public function categories(){
        return view('categories');
    }
    public function checkout(Request $request,$id){
        if(!Auth::check()) {
            return redirect('login');
        }
        $check = Deal::where('id',$id)->first();
        return view('checkout',compact('check'));
       
    }
    public function contactus(){
        return view('contactus');
    }
    public function deals_detail(Request $request,$id){
        $getdeals= Deal::find($id);
        if(!Auth::check()) {
        return redirect('login');
        }
     return view('deals_detail',compact('getdeals'));
        
    }
    public function FAQs(){
        return view('FAQs');
    }
    public function myaccount(){
        return view('myaccount');
    }
    public function myorder(){
        return view('myorder');
    }
    public function order_detail(){
        return view('order_detail');
    }
    public function partnerus(){
        return view('partnerus');
    }
    public function placeorder(){

        return view('placeorder');
    }
    public function privacy_policy(){
        return view('privacy_policy');
    }
    public function terms(){
        return view('terms');
    }

    
    public function forgot(){
        return view('forgot');
    }
    
   
}

