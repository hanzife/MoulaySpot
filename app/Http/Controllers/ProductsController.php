<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use auth;
use App\ShoppingCarte;
use App\Favorite;

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

        //GET FAVE
        $favorites = DB::table('favorites')
        ->select('favorites.id_User','favorites.id_plants')
        ->get();

        $shopping_cartes = DB::table('shopping_cartes')
        ->select('shopping_cartes.id_User','shopping_cartes.id_plants')
        ->get();

        return view('shop',compact('Plants','selectedSelector','CountPlants','favorites','shopping_cartes'));
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

        //GET FAVE
        $favorites = DB::table('favorites')
        ->select('favorites.id_User','favorites.id_plants')
        ->get();

        $shopping_cartes = DB::table('shopping_cartes')
        ->select('shopping_cartes.id_User','shopping_cartes.id_plants')
        ->get();

        //Redirect to View welcome.php
        return view('shop',compact('Plants','selectedSelector','CountPlants','favorites','shopping_cartes'));
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

        $numLikes = DB::table('favorites')
        ->where('favorites.id_plants','=',$id)
        ->select('id_plants')
        ->get();
        
        $CountLikes = count($numLikes);

        //GET FAVE
        $favorites = DB::table('favorites')
        ->select('favorites.id_User','favorites.id_plants')
        ->get();

        $shopping_cartes = DB::table('shopping_cartes')
        ->select('shopping_cartes.id_User','shopping_cartes.id_plants')
        ->get();

        // $thisplant = DB::table('shopping_cartes')
        // ->where('shopping_cartes.id_User','=',Auth::id())
        // ->where('shopping_cartes.id_plants','=',$id)
        // ->select('shopping_cartes.id_User','shopping_cartes.id_plants')
        // ->get();

        return view('Product',compact('Plant','Images','RelatedPlants','myfamily','conditions','CountLikes','favorites','shopping_cartes'));
    }

    public function AddCarte($id_Plant,Request $request){
       $idCustomer = Auth::id();
       $bool = $request->product_added;
       
        if($bool == "false"){
            ShoppingCarte::insert( [
                'id_User' => $idCustomer,
                'id_plants' =>$id_Plant,
            ]);
        }
        else{
            DB::table('shopping_cartes')->where('id_User', '=', $idCustomer)
            ->where('id_plants', '=', $id_Plant)
            ->delete();
        }
    }

    public function Like($id_Plant,Request $request){
        $idCustomer = Auth::id();
        $bool = $request->product_added;
        if($bool == "false"){
            Favorite::insert( [
                'id_User' => $idCustomer,
                'id_plants' =>$id_Plant,
            ]);
        }
        else{
            DB::table('favorites')->where('id_User', '=', $idCustomer)
            ->where('id_plants', '=', $id_Plant)
            ->delete();
        }
    }

}
