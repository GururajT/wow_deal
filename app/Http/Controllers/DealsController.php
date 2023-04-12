<?php

namespace App\Http\Controllers;

use App\Models\Deal;
use App\Models\BillerInfo;
use App\Models\favorite;
// use App\Models\Orders;
use Auth;
use DB;
use App\Models\Category;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
// use PhpParser\Node\Stmt\ElseIf_;


class DealsController extends Controller
{
    public function placeorder(Request $request){
        
        
        
        
    //     $order = new Orders;
    //    $order->user_id = Auth::user()->id;
    //     $order->biller_id = BillerInfo::find()->id;
    //     $order->save();
    return view('placeorder');

    }
    public function billerinfo(Request $request){
     if($request->submit){
    //     $user = BillerInfo::get('user_id');
    //     //dd($user);
    //    $user == Auth::user()->id;
    //    $bill = new BillerInfo;
    //         $bill->user_id = Auth::user()->id;
    //         $bill->fname   = $request->fname;
    //         $bill->lname   = $request->lname;
    //         $bill->email   = $request->email;
    //     $bill->telephone   = $request->telephone;
    //         $bill->update();
       
        
    //  }
    //  else
         $billing = new BillerInfo;
            $billing->user_id = Auth::user()->id;
            $billing->fname   = $request->fname;
            $billing->lname   = $request->lname;
            $billing->email   = $request->email;
        $billing->telephone   = $request->telephone;
            $billing->save();
            return back();
        }
        
}
   public function my_favorite(Request $request){
    $addfv = favorite:: get();
    foreach($addfv as $row){
        $deal = Deal::find($row->deals_id);
        $row->title = $deal ? $deal->title:'';
    }
//     echo "<pre>";
//   print_r($addfv->toArray()); die;

    return view('my_favorite',compact('addfv'));
   
   }
public function add_deal(Request $request){
    if($request->submit){
                $data = new Deal;
                $data->category_id=$request->category;
                $data->title = $request->title;
                $data->actual_price=$request->actual_price;
                $data->discounted_price=$request->discounted_price;
                $data->discription=$request->discription;
    if ($request->image) {
            foreach ($request->file('image') as $row) {
                $file = $row;
                $filename = time() . 'wd.' . $file->getClientOriginalExtension();
                $file->move('public/photos/deals/', $filename);
                $product_image[] = 'public/photos/deals/' . $filename;
            }
            $store_image = implode(',', $product_image);
            $data->image = $store_image;
        }
        $data->save();
        return redirect('/');
    }

   $category = Category::get();

    return view('add_deal',compact('category'));
}


public function addfavourite(Request $request,$deal_id){

    if(!Auth::check()) {
        return redirect('login');
    }
  $fv = new favorite;
  $fv->user_id = Auth::user()->id;
  $fv->deals_id= $deal_id;
  $fv->save();

  return back();
}
public function delete_deal(Request $request, $id)
{
    favorite::find($id)->delete();
    return back();

}
public function search(Request $request){
$data = Deal::where('title','like','%'.$request->input('query').'%')->get();
return view('search',['deals'=>$data]);
}
}

