<?php

namespace App\Http\Controllers\KeansburgPark;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserController extends Controller
{
    public function showAcount(Request $request)
    {
        if($request->session()->has('token') == false) {
            return redirect()->route("login-account");
        }
        $token = $request->session()->get('token');
        $data = DB::table('users')->where('token',$token)->get();
        $time = strtotime($data[0]->birthday);
        $day = idate('d',$time);
        $month = idate('m',$time);
        $year = idate('Y',$time);
        return view("acount.account")->with([
            'title'=>'Account',
            'account_name'=>$data[0]->name,
            'data'=>$data[0],
            'day'=>$day,
            'month'=>$month,
            'year'=>$year
        ]);
    }

    public function Updateinfo(Request $request)
    {
        $id = $request->id;
        $name = $request->username;
        $gender = $request->gender;
        $day = $request->day;
        $month = $request->month;
        $year = $request->year;
        $address = $request->address;
        $phone = $request->phone;
        DB::table('users')->where('id',$id)->update([
            'name'=>$name,
            'gender'=>$gender,
            'birthday'=>"$year-$month-$day",
            'address'=>$address,
            'phone'=>$phone
        ]);
        $request->session()->put('name',$name);
        return redirect()->route('account-show');
    }

    public function showmyorder(Request $request)
    {
        if($request->session()->has('token') == false) {
            return redirect()->route("login-account");
        }
        $token = $request->session()->get('token');
        $data = DB::table('users')->where('token',$token)->select('id','name')->get();
        if($request->search == '') {
            $dataOrder = DB::table('order')
                    ->where('user_id',$data[0]->id)
                    ->select('id','total_price','updated_at')
                    ->get();
        } else {
            $search = $request->search;
            $dataOrder = DB::table('order')
                    ->where('user_id',$data[0]->id)
                    ->where('id','like',"%$search%")
                    ->select('id','total_price','updated_at')
                    ->get();
        }
        return view("acount.myorder")->with([
            'title'=>'Account order',
            'account_name'=>$data[0]->name,
            'dataOrder'=>$dataOrder,
            'count'=>0
        ]);
    }

    public function showmyorderdetail(Request $request,$id)
    {
        if($request->session()->has('token') == false) {
            return redirect()->route("login-account");
        }
        $token = $request->session()->get('token');
        $dataUser = DB::table('users')->where('token',$token)->select('id','name')->get();
        $data = DB::table('orderdetail')
                ->join('ticket','ticket.id','=','orderdetail.ticket_id')
                ->where('orderdetail.order_id',$id)
                ->select('orderdetail.order_id','ticket.title','ticket.thumbnail','orderdetail.quantity','orderdetail.total_price','orderdetail.time_order_tiket')
                ->get();
        return view("acount.myorderdetail")->with([
            'title'=>'Order detail',
            'account_name'=>$dataUser[0]->name,
            'data'=>$data,
            'count'=>0
        ]);
    }

    public function showchange(Request $request)
    {
        if($request->session()->has('token') == false) {
            return redirect()->route("login-account");
        }
        $token = $request->session()->get('token');
        $data = DB::table('users')->where('token',$token)->select('id','name')->get();
        return view("acount.changepass")->with([
            'title'=>'Account change password',
            'account_name'=>$data[0]->name,
            'id'=>$data[0]->id
        ]);
    }

    public function changepass(Request $request,$id)
    {
        $passold = $request->oldpw;
        $passnew = $request->newpw;
        $data = DB::table('users')->where('id',$id)->select('password')->get();
        if (Hash::check($passold,$data[0]->password)) {
            DB::table('users')->where('id',$id)->update([
                'password'=>Hash::make($passnew)
            ]);
            return redirect()->route('account-show');
        }
        return redirect()->route('account-changepass');
    }
}
