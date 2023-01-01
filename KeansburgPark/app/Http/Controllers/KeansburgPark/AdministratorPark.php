<?php

namespace App\Http\Controllers\KeansburgPark;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Core\Number;
use RealRashid\SweetAlert\Facades\Aler;
use Illuminate\Support\Facades\Hash;

class AdministratorPark extends Controller
{
    public function showuser(Request $request)
    {
        $data = DB::table('users')->where('id','!=',1)->select('id','name','email','permission_id')->get();
        return view("administrator.permissionUser")->with([
            'title'=>'Permission',
            'data'=>$data,
            'count'=>0
        ]);
    }

    public function editPermission(Request $request)
    {
        DB::table('users')->where('id',$request->id)->update([
            'permission_id'=>$request->permission
        ]);
        $token = $request->session()->get('token');
        $id = DB::table('users')->where('token',$token)->select('id','permission_id')->get();
        if ($id[0]->id != 1) {
            if($id[0]->permission_id != 1) {
                $request->session()->put('permission',2);
                return redirect()->route('show','keansburg-park');
            }
        }
        return redirect()->route('administrator-permission');
    }

    public function changePass(Request $request)
    {
        $dataPass = DB::table('users')->where('id',$request->id)->select('password')->get();
        if ($request->id == 1) {
            if (Hash::check($request->oldpw, $dataPass[0]->password)) {
                DB::table('users')->where('id',$request->id)->update([
                    'password'=>Hash::make($request->newpw)
                ]);
            } else {
               $request->session()->put('error',1);
            }
        } else {
            DB::table('users')->where('id',$request->id)->update([
                'password'=>Hash::make($request->newpw)
            ]);
        }
        $request->session()->put('success',1);
        return redirect()->route('administrator-permission');
    }

    public function deleteUser(Request $request)
    {
        $idOrder = DB::table('order')->where('user_id',$request->id)->select('id')->get();
        for ($i=0; $i < count($idOrder); $i++) { 
            DB::table('orderdetail')->where('order_id',$idOrder[$i]->id)->delete();
        }
        DB::table('order')->where('user_id',$request->id)->delete();
        DB::table('users')->where('id',$request->id)->delete();
        return redirect()->route('administrator-permission');
    }

    public function showAdmin(Request $request)
    {
        $token = $request->session()->get('token');
        $id = DB::table('users')->where('token',$token)->select('id')->get();
        return view("administrator.administrator")->with([
            'title'=>'Administrator',
            'name'=>$request->session()->get('name'),
            'id'=>$id[0]->id
        ]);
    }

    public function showProduct(Request $request)
    {
        if($request->search == '') {
            $data = DB::table('ticket')->get();
        } else {
            $search = $request->search;
            $data = DB::table('ticket')->where('title','like',"%$search%")->get();
        }
        return view("administrator.administrator-product")->with([
            'title'=>'Administrator Product',
            'data'=>$data,
            'count'=>0
        ]);
    }

    public function showProductedit(Request $request,$id)
    {
        $id = (integer)$id;
        $data = DB::table('ticket')->where('id',$id)->get();
        return view("administrator.edit-product")->with([
            'title'=>'Edit product',
            'data'=>$data[0],
            'id'=>$id
        ]);
    }

    public function addProduct(Request $request)
    {
        $title = $request->ticket;
        $price = $request->price;
        $discount = $request->discount;
        $description = $request->description;
        $thumbnail = $request->thumbnail;
        $href_param = preg_replace('/\W/',' ',$title);
        $href_param = trim($href_param,' ');
        DB::table('ticket')->insert([
            'title'=>$title,
            'price'=>$price,
            'discount'=>$discount,
            'description'=>$description,
            'thumbnail'=>$thumbnail,
            'href_param'=>preg_replace('/    |   |  | /','-',strtolower($href_param))
        ]);
        $request->session()->put('successadd',1);
        return redirect()->route('administrator-product');
    }

    public function editProduct(Request $request)
    {
        $id = $request->id;
        $title = $request->ticket;
        $price = $request->price;
        $discount = $request->discount;
        $description = $request->description;
        $thumbnail = $request->thumbnail;
        $href_param = preg_replace('/\W/',' ',$title);
        $href_param = trim($href_param,' ');
        DB::table('ticket')->where('id',$id)->update([
            'title'=>$title,
            'price'=>$price,
            'discount'=>$discount,
            'description'=>$description,
            'thumbnail'=>$thumbnail,
            'href_param'=>preg_replace('/    |   |  | /','-',strtolower($href_param))
        ]);
        $request->session()->put('success',1);
        return redirect()->route('administrator-product');
    }

    public function showProductdelete(Request $request)
    {
        DB::table('ticket')->where('id',$request->id)->delete();
        return redirect()->route('administrator-product');
    }

    public function showNews(Request $request)
    {
        if($request->search == '') {
            $data = DB::table('menu')->where('category_id',13)->get();
        } else {
            $search = $request->search;
            $data = DB::table('menu')->where('category_id',13)->where('title','like',"%$search%")->get();
        }
        return view("administrator.news")->with([
            'title'=>'Administrator news',
            'data'=>$data,
            'count'=>0
        ]);
    }

    public function addNews(Request $request)
    {
        $title = $request->title;
        $note = $request->description;
        $description = $request->date;
        $thumbnail = $request->thumbnail;
        $href_param = preg_replace('/\W/',' ',$title);
        $href_param = trim($href_param,' ');
        DB::table('menu')->insert([
            'title'=>$title,
            'note'=>"$note",
            'category_id'=>13,
            'description'=>"$description",
            'thumbnail'=>$thumbnail,
            'href_param'=>preg_replace('/    |   |  | /','-',strtolower($href_param)),
            'link_css'=>'css-news'
        ]);
        $request->session()->put('successadd',1);
        return redirect()->route('administrator-news');
    }

    public function showNewsEdit(Request $request,$id)
    {
        $id = (integer)$id;
        $data = DB::table('menu')->where('category_id',13)->where('id',$id)->get();
        return view("administrator.news-edit")->with([
            'title'=>'Edit news',
            'data'=>$data[0],
            'id'=>$id
        ]);
    }

    public function editNews(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $note = $request->description;
        $description = $request->date;
        $thumbnail = $request->thumbnail;
        $href_param = preg_replace('/\W/',' ',$title);
        $href_param = trim($href_param,' ');
        DB::table('menu')->where('id',$id)->update([
            'title'=>$title,
            'note'=>"$note",
            'category_id'=>13,
            'description'=>"$description",
            'thumbnail'=>$thumbnail,
            'href_param'=>preg_replace('/    |   |  | /','-',strtolower($href_param)),
            'link_css'=>'css-news'
        ]);
        $request->session()->put('success',1);
        return redirect()->route('administrator-news');
    }

    public function showNewsdelete(Request $request)
    {
        DB::table('menu')->where('category_id',13)->where('id',$request->id)->delete();
        return redirect()->route('administrator-news');
    }

    public function showOrder(Request $request)
    {
        if ($request->session()->has('edit') == true) {
            $id = $request->session()->get('edit');
            $total = DB::table('orderdetail')->where('order_id',$id)->selectRaw('SUM(total_price) as total')->get();
            $total = $total[0];
            DB::table('order')->where('id',$id)->update([
                'total_price'=> (float) $total->total
            ]);
            $request->session()->forget('edit');
        }
        if($request->search == '') {
            $data = DB::table('order')
                ->leftJoin('users','users.id','=','order.user_id')
                ->select('order.*','users.name')
                ->get();
        } else {
            $search = $request->search;
            $data = DB::table('order')
                ->leftJoin('users','users.id','=','order.user_id')
                ->where('order.id',$search)
                ->select('order.*','users.name')
                ->get();
        }
        return view("administrator.order")->with([
            'title'=>'Administrator order',
            'data'=>$data,
            'count'=>0
        ]);
    }

    public function showOrderEdit(Request $request,$id)
    {
        $data = DB::table('order')
                ->leftJoin('users','users.id','=','order.user_id')
                ->where('order.id',$id)
                ->select('order.*','users.name')
                ->get();
        return view("administrator.order-edit")->with([
            'title'=>'Edit order',
            'data'=>$data[0],
            'id'=>$id
        ]);
    }

    public function editOrder(Request $request)
    {
        $id = $request->id;
        $total_price = $request->price;
        $updated_at = $request->date;
        DB::table('order')->where('id',$id)->update([
            'total_price'=>$total_price,
            'updated_at'=>$updated_at
        ]);
        $request->session()->put('success',1);
        return redirect()->route('administrator-order');
    }

    public function showOrderdelete(Request $request)
    {
        DB::table('orderdetail')->where('order_id',$request->id)->delete();
        DB::table('order')->where('id',$request->id)->delete();
        return redirect()->route('administrator-order');
    }

    public function showOrderDetail(Request $request,$id)
    {
        $data = DB::table('orderdetail')
                ->join('ticket','ticket.id','=','orderdetail.ticket_id')
                ->where('orderdetail.order_id',$id)
                ->select('orderdetail.*','ticket.title')
                ->get();
        return view("administrator.orderdetail")->with([
            'title'=>'Administrator order',
            'data'=>$data,
            'count'=>0
        ]);
    }

    public function showOrderdetailEdit(Request $request,$id,$idedit)
    {
        $dataTicket = DB::table('ticket')->get();
        $dataOrderdetail = DB::table('orderdetail')
                            ->join('order','order.id','=','orderdetail.order_id')
                            ->join('ticket','ticket.id','=','orderdetail.ticket_id')
                            ->where('orderdetail.order_id',$id)
                            ->where('orderdetail.id',$idedit)
                            ->select('orderdetail.*')
                            ->get();
        return view("administrator.orderdetail-edit")->with([
            'title'=>'Edit Order Detail',
            'dataTicket'=>$dataTicket,
            'dataOrderdetail'=>$dataOrderdetail[0],
            'idedit'=>$idedit,
            'id'=>$id
        ]);
    }

    public function editOrderdetail(Request $request,$id)
    {
        $idedit = $request->idedit;
        $idticket = $request->ticket;
        $quantity = $request->quantity;
        $dataTicket = DB::table('ticket')->where('id',$idticket)->select('discount')->get();
        $dataTicket = $dataTicket[0];
        $total_price = $dataTicket->discount * $quantity;
        $time = $request->date;
        $request->session()->put('edit',$id);
        DB::table('orderdetail')
            ->where('id',$idedit)
            ->update([
                'ticket_id'=>$idticket,
                'quantity'=>$quantity,
                'total_price'=>$total_price,
                'time_order_tiket'=>"$time",
                "updated_at"=>Carbon::now('Asia/Ho_Chi_Minh')
            ]);
        $request->session()->put('success',1);
        return redirect()->route('administrator-order');
    }

    public function showOrderdetaildelete(Request $request,$id,$idedit)
    {
        DB::table('orderdetail')->where('id',$idedit)->delete();
        return redirect()->route('administrator-order');
    }
}
