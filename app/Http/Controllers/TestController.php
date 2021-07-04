<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){
        $data =[];
        $max_date_query = DB::select('select MONTH(MAX(date)) as max_month from tbl_url ');
        $data['max_month'] = $max_date_query[0]->max_month;
        //prd($data['max_month']);

        $data['tbl_url'] = DB::table('tbl_url')->select('url','value1','value2',DB::raw('MONTH((date)) as month'))->get();
        // prd($data['tbl_url']);
        //$res = DB::table('tbl_url')->select('url','value1','value2',DB::raw('MONTH((date)) as month'))->get()->toArray();
        //$t = [];
        // for($i=1; $i<= $data['max_month'] ; $i++){
        //     foreach($res as $cat){

        //         if(in_array($cat->month, range(1,$data['max_month']+1))){
        //             if(!array_key_exists($cat->month, $t)) {

        //                 $t[$cat->month] = $cat;
        //             }
        //             $new_obj = clone $res[count($res)-1];
        //             array_push($res, $new_obj);
        //             $res[count($res)-1]->url = 'gau';
        //             $res[count($res)-1]->value1 = 0;
        //             $res[count($res)-1]->value2 = 0;
        //             $res[count($res)-1]->month = $i;
        //         }


        //     }
        // }
        //prd($t);

        $data['distinct_tbl_url'] = DB::table('tbl_url')->select('url','category')->groupBy('url')->orderBy('category')->get();
        // prd($data['distinct_tbl_url']);
        return view('test')->with($data);
    }
    public function test1(){
        $data =[];
        $max_date_query = DB::select('select MONTH(MAX(date)) as max_month from tbl_url ');
        $data['max_month'] = $max_date_query[0]->max_month;
        //prd($data['max_month']);

        $data['tbl_url'] = DB::table('tbl_url')->select('url','value1','value2',DB::raw('MONTH((date)) as month'))->get();
        // prd($data['tbl_url']);
        //$res = DB::table('tbl_url')->select('url','value1','value2',DB::raw('MONTH((date)) as month'))->get()->toArray();
        //$t = [];
        // for($i=1; $i<= $data['max_month'] ; $i++){
        //     foreach($res as $cat){

        //         if(in_array($cat->month, range(1,$data['max_month']+1))){
        //             if(!array_key_exists($cat->month, $t)) {

        //                 $t[$cat->month] = $cat;
        //             }
        //             $new_obj = clone $res[count($res)-1];
        //             array_push($res, $new_obj);
        //             $res[count($res)-1]->url = 'gau';
        //             $res[count($res)-1]->value1 = 0;
        //             $res[count($res)-1]->value2 = 0;
        //             $res[count($res)-1]->month = $i;
        //         }


        //     }
        // }
        //prd($t);

        $data['distinct_tbl_url'] = DB::table('tbl_url')->select('url','category')->orderBy('category')->get();
        // prd($data['distinct_tbl_url']);
        return view('test1')->with($data);
    }
}
