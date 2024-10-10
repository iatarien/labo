<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Bcrypt;
use Redirect;
class ModuleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
     public function labos()
     {
 
         $user = Auth::user();
         $labos = DB::table('labos')->get();
         return view('modules.labos',['labos' =>$labos,'user'=>$user]);
     }
     public function add_labo()
     {
         $user = Auth::user();
         return view('modules.add_labo',['user'=>$user]);
     }
     public function edit_labo($id)
     {
         $user = Auth::user();
         $labo = DB::table('labos')->where('id_labo',$id)->first();
         
         return view('modules.edit_labo',['user'=>$user,'labo'=>$labo]);
     }
     public function insert_labo(Request $request){
        $name_labo = $request['name_labo']; 
        $id = DB::table('labos')->insertGetId(['name_labo'=>$name_labo]);
        return Redirect::to('/labos/');
     }
     public function update_labo(Request $request){
 
        $id = $request['id'];
        $name_labo = $request['name_labo']; 

        DB::table('labos')->where('id_labo',$id)->
        update(['name_labo'=>$name_labo]);
        return Redirect::to('/labos/');
         
     }
     public function delete_labo($id){
         DB::table('labos')->where('id_labo',$id)->delete();
         return Redirect::to('/labos/');
     }



     public function niveaux()
     {
 
         $user = Auth::user();
         $niveaux = DB::table('niveau')->get();
         return view('modules.niveaux',['niveaux' =>$niveaux,'user'=>$user]);
     }
     public function add_niveau()
     {
         $user = Auth::user();
         return view('modules.add_niveau',['user'=>$user]);
     }
     public function edit_niveau($id)
     {
         $user = Auth::user();
         $niveau = DB::table('niveau')->where('id_niveau',$id)->first();
         
         return view('modules.edit_niveau',['user'=>$user,'niveau'=>$niveau]);
     }
     public function insert_niveau(Request $request){
        $name_niveau = $request['name_niveau']; 
        $id = DB::table('niveau')->insertGetId(['name_niveau'=>$name_niveau]);
        return Redirect::to('/niveaux/');
     }
     public function update_niveau(Request $request){
 
        $id = $request['id'];
        $name_niveau = $request['name_niveau']; 

        DB::table('niveau')->where('id_niveau',$id)->
        update(['name_niveau'=>$name_niveau]);
        return Redirect::to('/niveaux/');
         
     }
     public function delete_niveau($id){
         DB::table('niveau')->where('id_niveau',$id)->delete();
         return Redirect::to('/niveaux/');
     }



     public function modules()
     {
 
         $user = Auth::user();
         $modules = DB::table('module')->get();
         return view('modules.modules',['modules' =>$modules,'user'=>$user]);
     }
     public function add_module()
     {
         $user = Auth::user();
         return view('modules.add_module',['user'=>$user]);
     }
     public function edit_module($id)
     {
         $user = Auth::user();
         $module = DB::table('module')->where('id_module',$id)->first();
         
         return view('modules.edit_module',['user'=>$user,'module'=>$module]);
     }
     public function insert_module(Request $request){
        $name_module = $request['name_module']; 
        $id = DB::table('module')->insertGetId(['name_module'=>$name_module]);
        return Redirect::to('/modules/');
     }
     public function update_module(Request $request){
 
        $id = $request['id'];
        $name_module = $request['name_module']; 

        DB::table('module')->where('id_module',$id)->
        update(['name_module'=>$name_module]);
        return Redirect::to('/modules/');
         
     }
     public function delete_module($id){
         DB::table('module')->where('id_module',$id)->delete();
         return Redirect::to('/modules/');
     }
   
}
