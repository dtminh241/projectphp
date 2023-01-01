<?php

namespace App\Http\Controllers\KeansburgPark;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class KeansburgParkController extends Controller
{
    public function showRR(Request $request)
    {
        $data = DB::table('menu')->select("title","thumbnail","href_param")->where('category_id',2)->get();
        return view("rapidsattractions.runaway-rapids")->with([
            'title'=>"Runaway Rapids - Keansburg Amusement Park & Runaway Rapids Waterpark",
            'data'=>$data
        ]);
    }

    public function showRRChil(Request $request,$href)
    {
        $data = DB::table('menu')->select("title","thumbnail","note")
                ->where('category_id',2)
                ->where('href_param',$href)
                ->get();
        return view("rapidsattractions.showrrchil")->with([
            'title'=>$data[0]->title.' - Keansburg Amusement Park & Runaway Rapids Waterpark',
            'data'=>$data[0]
        ]);
    }

    public function show(Request $request,$href)
    {
        $data = DB::table('category')->select('name')->where('href_param',$href)->get();
        return view('keansburgpark.'.$href)->with([
            'title'=>$data[0]->name.' - Keansburg Amusement Park & Runaway Rapids Waterpark'
        ]);
    }

    public function showHistory(Request $request)
    {
        $data = DB::table('menu')->select("title","thumbnail","note","description")->where('category_id',12)->get();
        return view("information.history")->with([
            'title'=>'History - Keansburg Amusement Park & Runaway Rapids Waterpark',
            'data'=>$data,
            'count'=>0
        ]);
    }

    public function showNews(Request $request)
    {
        $data = DB::table('menu')->select("id","title","thumbnail","note","description","href_param")->where('category_id',13)->get();
        return view("information.news")->with([
            'title'=>'News - Keansburg Amusement Park & Runaway Rapids Waterpark',
            'data'=>$data
        ]);
    }

    public function showChilren(Request $request,$href)
    {
        $data = DB::table('menu')->select("id","title","thumbnail","note","description","href_param")
            ->where('category_id',13)
            ->get();
        $dataTitle = DB::table('menu')->select("title","href_param","save","link_css")
                ->where('category_id',13)
                ->where('href_param',$href)
                ->get();
        return view("information.show")->with([
            'title'=>$dataTitle[0]->title.' - Keansburg Amusement Park & Runaway Rapids Waterpark',
            'data'=>$data,
            'showData'=>$dataTitle[0]->save,
            'datacss'=>$dataTitle[0]->link_css
        ]);  
    }

    public function showAccommodations(Request $request)
    {
        $data = DB::table('menu')
                ->select("title","description","note","thumbnail")
                ->where('category_id',14)
                ->get();
        return view("information.accommodations")->with([
            'title'=>'Accommodations - Keansburg Amusement Park & Runaway Rapids Waterpark',
            'data'=>$data
        ]);
    }

    public function showEvent(Request $request)
    {
        $data = DB::table('menu')
                ->select("title","description","thumbnail","href_param")
                ->where('category_id',17)
                ->get();
        return view("information.showEvent")->with([
            'title'=>'Events - Keansburg Amusement Park & Runaway Rapids Waterpark',
            'data'=>$data,
            'count'=>0
        ]);
    }

    public function showEventChil(Request $request,$href)
    {
        $data = DB::table('menu')->select("title","save","thumbnail")
                ->where('category_id',17)
                ->where('href_param',$href)
                ->get();
        return view("information.showEventChil")->with([
            'title'=>$data[0]->title.' - Keansburg Amusement Park & Runaway Rapids Waterpark',
            'data'=>$data[0]
        ]);
    }

    public function showFood(Request $request)
    {
        $data = DB::table('menu')
                ->select("title","thumbnail","href_param")
                ->where('category_id',19)
                ->get();
        return view("food.showFood")->with([
            'title'=>'Food - Keansburg Amusement Park & Runaway Rapids Waterpark',
            'data'=>$data
        ]);
    }

    public function showFoodChil(Request $request,$href)
    {
        $data = DB::table('menu')->select("title","note","thumbnail","href_param")
                ->where('category_id',19)
                ->where('href_param',$href)
                ->get();
        
        return view("food.showFoodChil")->with([
            'title'=>$data[0]->title.' - Keansburg Amusement Park & Runaway Rapids Waterpark',
            'data'=>$data[0]
        ]);
    }

    public function showTimeTicket(Request $request)
    {
        $dataTimeKid = DB::table('kiddierides')->get();
        $dataTimeMajor = DB::table('majorrides')->get();
        return view("ticket.ride-height-ticketing")->with([
            'title'=>'Ride Height & Ticketing - Keansburg Amusement Park & Runaway Rapids Waterpark',
            'timekid'=>$dataTimeKid,
            'timemajor'=>$dataTimeMajor
        ]);
    }

    public function showShop(Request $request)
    {
        if ($request->session()->has('token') == false) {
            return redirect()->route("login-account");
        }
        $data = DB::table('ticket')->select('id','thumbnail','href_param')->get();
        return view("keansburgpark.shop")->with([
            'title'=>'Shop',
            'data'=>$data,
            'count'=>0
        ]);
    }

    public function showBuyticket(Request $request,$href)
    {
        if ($request->session()->has('token') == false) {
            return redirect()->route("login-account");
        }
        $data = DB::table('ticket')
                ->where('href_param',$href)
                ->select('title','discount','id','description','thumbnail','href_param')
                ->get();
        $data = $data[0];
        $dataExits = DB::table('ticket')->where('id','!=',"$data->id")->select('title','thumbnail','href_param')->get();
        return view("keansburgpark.buy-ticket")->with([
            'title'=>'Buy',
            'data'=>$data,
            'dataExits'=>$dataExits
        ]);
    }

    public function showAddCart(Request $request)
    {
        if ($request->session()->has('token') == false) {
            return redirect()->route("login-account");
        }
        $token = $request->session()->get('token');
        $idUser = DB::table('users')->where('token',$token)->select('id')->get();
        $idOrder = 0;
        if ($request->session()->has('cart') == false) {
            $idOrder = DB::table('order')->insertGetId([
                'user_id'=>$idUser[0]->id,
                'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')
            ]);
            $request->session()->put('cart',$idOrder);
        } else {
            $idOrder = $request->session()->get('cart');
        }
        $price = DB::table('ticket')->where('id',$request->id)->select('discount')->get();
        $id = $request->id;
        $quantity = $request->quantity;
        if ($idOrder != 0) {
            DB::table('orderdetail')->insert([
                'order_id'=>$idOrder,
                'ticket_id'=>$id,
                'quantity'=>$quantity,
                'time_order_tiket'=>Carbon::now('Asia/Ho_Chi_Minh'),
                'total_price'=>$price[0]->discount * $quantity,
                'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')
            ]);
            $request->session()->put('success',1);
        }
        return redirect()->route('shop-showbuyticket',$request->href);
    }

    public function showcart(Request $request)
    {
        if ($request->session()->has('cart') == true) {
            $idOrder = $request->session()->get('cart');
            $data = DB::table('orderdetail')
                    ->leftJoin('ticket','ticket.id','=','orderdetail.ticket_id')
                    ->where('orderdetail.order_id',$idOrder)
                    ->select('orderdetail.id','orderdetail.order_id','orderdetail.quantity','orderdetail.total_price','ticket.title','ticket.discount')
                    ->get();
            $totalPrice = DB::table('orderdetail')
                        ->where('order_id',$idOrder)
                        ->selectRaw('SUM(total_price) as total')
                        ->get();
            DB::table('order')->where('id',$idOrder)->update([
                'total_price'=>$totalPrice[0]->total,
                'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')
            ]);
            return view("keansburgpark.cart")->with([
                'title'=>'Cart',
                'data'=>$data,
                'total_price'=>$totalPrice[0]->total,
                'count'=>0
            ]);
        }
        return view("keansburgpark.cart")->with([
            'title'=>'Cart',
            'data'=>'Your cart is currently empty.',
            'total_price'=>0,
            'count'=>0
        ]);
    }

    public function showeditcart(Request $request)
    {
        $id = $request->id;
        $quantity = $request->quantity;
        $price = $request->price;
        DB::table('orderdetail')->where('id',$id)->update([
            'quantity'=>$quantity,
            'total_price'=>$quantity * $price
        ]);
        return redirect()->route('cart-showcart');        
    }

    public function showdeletecart(Request $request, $id)
    {
        DB::table('orderdetail')->where('id',$id)->delete();
        return redirect()->route('cart-showcart');
    }

    public function showcancelcart(Request $request)
    {
        if ($request->session()->has('cart') == true) {
            $cart = $request->session()->get('cart');
            DB::table('orderdetail')->where('order_id',$cart)->delete();
            DB::table('order')->where('id',$cart)->delete();
            $request->session()->forget('cart');
        }
        return redirect()->route('shop-showshop');
    }

    public function showpaycart(Request $request)
    {
        # code...
    }
}
