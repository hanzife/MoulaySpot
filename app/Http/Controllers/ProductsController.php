<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProductsController extends Controller
{
    public function index(){
        //Give me 3 plants
        $Plants = DB::table('plants')
        ->join('images','images.id_plants','=','id')
        ->where('images.type','=','Main')
        ->inRandomOrder()
        // ->limit(3)
        ->select('images.reference','plants.name','plants.family','plants.price','plants.id')
        ->get();
        $CountPlants = count($Plants);
        $selectedSelector = "All Families";
        //Redirect to View welcome.php
        return view('shop',compact('Plants','selectedSelector','CountPlants'));
    }

    public function show($Family){
        $Plants = DB::table('plants')
        ->where('plants.family','=',$Family)
        ->join('images','images.id_plants','=','id')
        ->where('images.type','=','Main')
        ->inRandomOrder()
        // ->limit(3)
        ->select('images.reference','plants.name','plants.family','plants.price','plants.id')
        ->get();

        $CountPlants = count($Plants);

        $selectedSelector = $Family;

        //Redirect to View welcome.php
        return view('shop',compact('Plants','selectedSelector','CountPlants'));
    }

    public function showItem($id){

        $Plant = DB::table('plants')
        ->where('plants.id','=',$id)
        ->join('images','images.id_plants','=','id')
        ->where('images.type','=','Main')
        ->select('images.reference','plants.name','plants.family','plants.price','plants.id','plants.description')
        ->get();

        $Images = DB::table('images')
        ->where('images.id_plants','=',$id)
        ->select('images.reference')
        ->get();

        foreach($Plant as $row)
        {
            $myfamily = $row->family;
        }
       
        $RelatedPlants = DB::table('plants')
        ->where('plants.family','=',$myfamily)
        ->join('images','images.id_plants','=','id')
        ->where('images.type','=','Main')
        ->where('images.id_plants','!=',$id)
        ->limit(3)
        ->select('images.reference','plants.id','plants.name','plants.family','plants.price','plants.id','plants.description')
        ->get();

        $conditions = DB::table('conditions')
        ->join('plants','plants.id_conditions','=','conditions.id_conditions')
        ->where('plants.id','=',$id)
        ->select('Hardiness_img','Hardiness','Position_img','Position')
        ->get();
        return view('Product',compact('Plant','Images','RelatedPlants','myfamily','conditions'));
    }

}
