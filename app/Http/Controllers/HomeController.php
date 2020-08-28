<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use image;
class HomeController extends Controller
{
    public function index()
    {
        //Give me 3 plants
        $Plants = DB::table('plants')
        ->join('images','images.id_plants','=','id')
        ->where('images.type','=','Main')
        ->inRandomOrder()
        ->limit(3)
        ->select('images.reference','plants.name','plants.family','plants.price','plants.id')
        ->get();

        //Redirect to View welcome.php
        return view('welcome',compact('Plants'));
    }
      
        
        // //all professions
        // //This will be used to include sun-professions with the $suprofession
        // // $dataprofession = Profession::distinct()->get(['libelle_P','professions.id_profession']);
        // $dataprofession = Profession::distinct()->get(['libelle_P']);
        // //Cities
        // $datacity = Brikoleur::distinct()->get(['ville']);
        // //This will be used to include sun-professions with the 1st $dataprofession
        // $suprofession = DB::table('sous_professions')
        // ->join('professions','sous_professions.id_sous_profession','=','professions.id_profession')
        // ->select('sous_professions.libelle_SP','sous_professions.id_profession')
        // ->distinct()
        // ->get();
     

        // if(session()->has('id')){

        //     $idClient = session()->get('id');

        //     $Datahistorique = DB::table('historiques')
        //     ->where('id_client','=',$idClient)
        //     ->join('brikoleurs','historiques.id_brikoleur','=','brikoleurs.id')
        //     ->join('images','images.id_brikoleur','=','brikoleurs.id')
        //     ->where('images.type','=','Profile')
        //     ->join('professions','professions.id_profession','=','brikoleurs.id_profession') 
        //     ->select('professions.libelle_P','brikoleurs.id','brikoleurs.nom','brikoleurs.prenom','brikoleurs.description','images.reference','historiques.created_at')
        //     // ->inRandomOrder()
        //     ->orderBy('historiques.created_at', 'DESC')
        //     ->limit(5)
        //     ->get();
        //     $countHistory = count($Datahistorique);
            
            

        //     $dataimages = DB::table('images')  
        //     ->where('images.type','=','Portfolio')
        //     ->join('historiques','historiques.id_brikoleur','=','images.id_brikoleur')
        //     ->where('id_client','=',$idClient)
        //     ->select('images.reference','images.id_brikoleur' )  
        //     ->groupBy('historiques.id_brikoleur')
        //     // ->orderBy('historiques.created_at', 'DESC')
        //     // ->inRandomOrder()

        //     ->get();


            



        //     // $Datahistorique = 
        //     // ->select('brikoleurs.nom','brikoleurs.prenom','images.id_image','images.reference','professions.libelle_P')
            
        //     return view('welcome',compact('data','dataprofession','datacity','suprofession','brikoluerCount','Datahistorique','countHistory','dataimages'));

        // }
        // else{
        //     return view('welcome',compact('data','dataprofession','datacity','suprofession','brikoluerCount'));

        // }

        
    // }
}
