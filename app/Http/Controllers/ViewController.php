<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    public function cakeview(){
        $cakeview = DB::select('select * from cake');
        return view('Cakeview',['cake'=>$cakeview]);
        }
    public function outfitview(){
            $outfitview = DB::select('select * from outfits');
            return view('outfitview',['outfits'=>$outfitview]);
            }
    public function venueview(){
            $venueview = DB::select('select * from venues');
            return view('venueview',['venues'=>$venueview]);
            }
    public function foodview(){
            $foodview = DB::select('select * from foodbeverages');
            return view('foodview',['food'=>$foodview]);
             }
}

