<?php

namespace App\Http\Controllers\KeansburgPark;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    // public function showInfor(Request $request,$href)
    // {
    //     $data = DB::table('category')->select('name')->where('href_param',$href)->get();
    //     return view('information.'.$href)->with([
    //         'title'=>$data[0]->name.' - Keansburg Amusement Park & Runaway Rapids Waterpark'
    //     ]);
    // }

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

    // public function showGp(Request $request,$href)
    // {
    //     $data = DB::table('category')->select('name')->where('href_param',$href)->get();
    //     return view('groupandparty.'.$href)->with([
    //         'title'=>$data[0]->name.' - Keansburg Amusement Park & Runaway Rapids Waterpark'
    //     ]);
    // }
}
