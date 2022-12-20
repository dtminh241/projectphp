<?php

namespace App\Http\Controllers\KeansburgPark;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeansburgParkController extends Controller
{
    public function showNews(Request $request)
    {
        $data = DB::table('menu')->select("id","title","thumbnail","note","description","href_param")->where('category_id',13)->get();
        return view("information.news")->with([
            'title'=>'News & Press Releases',
            'data'=>$data
        ]);
    }

    public function showChilren(Request $request,$href)
    {
        $data = DB::table('menu')->select("id","title","thumbnail","note","description","href_param")
            ->where('category_id',13)
            ->get();
        $dataTitle = DB::table('menu')->select("id","title","thumbnail","note","description","href_param")
                ->where('category_id',13)
                ->where('href_param',$href)
                ->get();
        return view("information.$href")->with([
            'title'=>$dataTitle[0]->title.' - Keansburg Amusement Park & Runaway Rapids Waterpark',
            'data'=>$data
        ]);  
    }
}
