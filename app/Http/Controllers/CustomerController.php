<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function ShoppingCarte(){
        $CustomerID = Auth::id();
        $CarteItem = DB::table('shopping_cartes')
        ->where('shopping_cartes.id_User','=',$CustomerID)
        ->join('plants','plants.id','=','shopping_cartes.id_plants')
        ->join('images','images.id_plants','=','shopping_cartes.id_plants')
        ->where('images.type','=','Main')
        ->select('images.reference','plants.name','plants.family','plants.price','plants.id')
        ->get();
        // SELECT sum(price) FROM `plants`where `id`= 2

        $totalPrice =0;
        foreach($CarteItem as $item){
            $totalPrice += $item->price;
        }
        // $totalPrice = $CarteItem->plants->sum('price');
        $countItems = count($CarteItem);
        return view('ShoppingCarte',compact('CarteItem','countItems','totalPrice'));
        
        
        // return view('ShoppingCarte');

    }

    public function removeCarte($id){
        $idCustomer = Auth::id();
    
        DB::table('shopping_cartes')->where('id_User', '=', $idCustomer)
        ->where('id_plants', '=', $id)
        ->delete();
         
    }
}
