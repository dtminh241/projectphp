<?php

namespace App\Http\Controllers\KeansburgPark;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailForgetPass;
use Hamcrest\Type\IsBoolean;

class LoginController extends Controller
{
    public function createUser(Request $request)
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $username = $request->username;
        $email = $request->email;
        $password = Hash::make($request->password);
        DB::table('users')->insert([
            'name'=>$username,
            'email'=>$email,
            'password'=>$password,
            'created_at'=>$dt->toDateTimeString(),
            'permission_id'=>2
        ]);
        return redirect()->route("login-account");
    }

    public function checkLogin(Request $request)
    {
        $count = 0;
        $data = DB::table('users')->select('id','name','email','password','permission_id')->get();
        for ($i=0; $i < count($data); $i++) { 
            if ($request->email == $data[$i]->email) {
                if (Hash::check($request->password, $data[$i]->password)) {
                    $token = 'abecsgpame'.$data[$i]->password;
                    DB::table('users')->where('id',$data[$i]->id)->update(['token'=>$token]);
                    $request->session()->put('token',$token);
                    $request->session()->put('name',$data[$i]->name);
                    $request->session()->put('permission',$data[$i]->permission_id);
                    return redirect()->route('show','keansburg-park');
                    $count = 1;
                }
            }
        }
        if ($count == 0){
            $request->session()->put('checklogin',1);
        }
        return redirect()->route("login-account");
    }

    public function logoutAccount(Request $request)
    {
        if ($request->session()->has('cart')) {
            $idOrder = $request->session()->get('cart');
            DB::table('orderdetail')->where('order_id',$idOrder)->delete();
            DB::table('order')->where('id',$idOrder)->delete();
        }
        $request->session()->flush();
        return redirect()->route('show','keansburg-park');
    }

    public function createcode(Request $request)
    {
        if ($request->email != '') {
            $data = DB::table('users')->where('email',$request->email)->select('id','name')->get();
            if (count($data) == 1) {
                $ran = ''.mt_rand(1,9)*(mt_rand(1,5)/mt_rand(6,9)).'';
                $ran = $ran*1000;
                $ran = (integer) $ran;
                $request->session()->put('recoverycode',$ran);
                $request->session()->put('recoveryid',$data[0]->id);
                $mailData = [
                    'title' => 'Dear, '.$data[0]->name,
                    'body' => 'Correct: '.$ran
                ];
                
                Mail::to($request->email)->send(new MailForgetPass($mailData));
                return view("login.checkcode")->with([
                    'title'=>'Check code'
                ]);
            } else {
                $request->session()->put('error',1);
                return redirect()->route('account-foget');
            }
        } else {
            $request->session()->put('error',2);
            return redirect()->route('account-foget');
        }
    }

    public function checkcode(Request $request)
    {
        $codePost = $request->code;
        $codeSession = $request->session()->get('recoverycode');
        if ($codePost == $codeSession) {
            $request->session()->forget('recoverycode');
            return view("login.changepas")->with([
                'title'=>'Change pass'
            ]);
        } else {
            $request->session()->put('error',1);
            return view("login.checkcode")->with([
                'title'=>'Check code'
            ]);
        }
    }

    public function changepassforget(Request $request)
    {
        $newpas = $request->newpw;
        $confirmpas = $request->newpw2;
        if (strlen($newpas) < 8) {
            $request->session()->put('error',1);
            return view("login.changepas")->with([
                'title'=>'Change pass'
            ]);
        }
        if ($newpas != $confirmpas) {
            $request->session()->put('error',2);
            return view("login.changepas")->with([
                'title'=>'Change pass'
            ]);
        }
        $id = $request->session()->get('recoveryid');
        DB::table('users')->where('id',$id)->update([
            'password'=>Hash::make($newpas)
        ]);
        return redirect()->route("login-account");
    }
}
