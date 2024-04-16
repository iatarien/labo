<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use DB;
use Auth;
use Bcrypt;
use Redirect;

class ReserveController extends Controller
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
     
    public function add_reserve($rapport="",$outil="")
    {   
        $user = Auth::user();
        $rapports = DB::table('rapport')->join("activity","activity.id_activity","=","rapport.activite")->
        leftjoin("users","rapport.engineer","users.id")->
        join("niveau","activity.niveau","=","niveau.id_niveau")->
        join("module","module.id_module","activity.module")->
        join("labos","labos.id_labo","rapport.labo")->
        orderBy("date","ASC")->orderBy("time","ASC")->get();
        foreach($rapports as $rapport){
            $outils = DB::table("outils")->join("tools","tools.id_tool","=","outils.id_outil")->where("outils.id_rapport",$rapport->id_rapport)->get();
            $chemicals = DB::table("chemicals")->join("chemical","chemicals.id_chemical","=","chemical.id_chemical")->where("chemicals.id_rapport",$rapport->id_rapport)->get();
            $n = count($outils);
            $m = count($chemicals);
            if($n == 0){
                $n = 1;
            }
            $rapport->outils = $outils;
            $rapport->chemicals = $chemicals;
            $rapport->n = $n;
            $rapport->m = $m;
        }
        return view('rapport.rapports',['user'=> $user,"rapports"=>$rapports]);
    }
}
