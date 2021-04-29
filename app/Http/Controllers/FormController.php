<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option\cake;
use App\Models\Option\outfits;
use App\Models\Option\venues;
use App\Models\Option\foodbeverages;

class FormController extends Controller
{
    function fillcake(Request $request){
        $cake=new cake;
        $cake->name=$request->name;
        $cake->type=$request->type;
        $cake->prices=$request->price;
        $cake->save();

        return redirect('cakeview');
    }


    function filloutfit(Request $request){
        $outfits=new outfits;
        $outfits->nameoutfit=$request->nameoutfit;
        $outfits->typeofoutfit=$request->typeofoutfit;
        $outfits->size=$request->size;
        $outfits->colour=$request->colour;
        $outfits->prices=$request->prices;
        $outfits->save();

        return redirect('outfitview');
    }

    function fillvenue(Request $request){
        $venues=new venues;
        $venues->Typevenue=$request->Typevenue;
        $venues->namevenue=$request->namevenue;
        $venues->address=$request->address;
        $venues->description=$request->description;
        $venues->prices=$request->prices;
        $venues->time=$request->time;
        $venues->save();

        return redirect('venueview');
    }

    function fillfoodbeverages(Request $request){
        $food=new foodbeverages;
        $food->typesfood=$request->typesfood;
        $food->Namefood=$request->Namefood;
        $food->participant=$request->participant;
        $food->description=$request->description;
        $food->prices=$request->prices;
        $food->save();

        return redirect('foodview');
    }
}
