<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use DB;
use Auth;
use Bcrypt;
use Redirect;

class RapportController extends Controller
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

     
    public function show_rapports($filters="")
    {   
        $user = Auth::user();
        $rapports = DB::table('rapport')->
        join("activity","activity.id_activity","=","rapport.activite")->
        leftjoin("users","rapport.engineer","users.id")->
        leftjoin("niveau","activity.niveau","=","niveau.id_niveau")->
        leftjoin("module","module.id_module","activity.module")->
        leftjoin("labos","labos.id_labo","rapport.labo")->
        where('rapport.confirmed',"=","confirmed")->
        orderBy("date","DESC")->orderBy("time","ASC")->get();
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
            foreach($rapport->outils as $outil){
                if($outil->avis =="بتحفظ"){
                    $reserve = DB::table('reserves')->where('rapport',$rapport->id_rapport)->
                    where('outil',$outil->id_outil)->where('state',"avis")->first();
                    $outil->reserve_before = $reserve->id_reserve;
                }
                if($outil->state_after =="بتحفظ"){
                    $reserve = DB::table('reserves')->where('rapport',$rapport->id_rapport)->
                    where('outil',$outil->id_outil)->where('state',"after")->first();
                    $outil->reserve_after = $reserve->id_reserve;
                }
            }
        }
        return view('rapport.rapports',['user' => $user,"rapports"=>$rapports]);
        
    }

    public function confirm_rapport($id){
        DB::table('rapport')->where('id_rapport',$id)->update(["confirmed"=>"confirmed"]);
        return "confirmed";
    }
     
    public function add_rapport()
    {   
        $user = Auth::user();
        $engineers = DB::table('users')->where('service',"Ingenieur")->get();
        $labos = DB::table('labos')->get();
        return view('rapport.ajouter1',['user' => $user,"labos"=>$labos]);
        
    }
    public function add_rapport_2($id)
    {   
        $user = Auth::user();
        $rapport = DB::table('rapport')->where('id_rapport',$id)->first();
        $niveaux = DB::table('niveau')->get();
        $modules = DB::table('module')->get();
        $teachers = DB::table('teachers')->get();
        return view('rapport.ajouter2',['user' => $user,"rapport"=>$rapport,
        "niveaux"=>$niveaux,"modules"=>$modules,"teachers"=>$teachers]);
        
    }
    public function add_outils($id)
    {   
        $user = Auth::user();
        $rapport = DB::table('rapport')->where('id_rapport',$id)->first();
        $devices = DB::table('tools')->where("type","جهاز")->get();
        $matieres = DB::table('tools')->where("type","مادة")->get();
        $chemicals = DB::table('chemical')->where("expiration",">=",Date('Y-m-d'))->
        orWhereNULL("expiration")->get();
        return view('rapport.ajouter_outils',['user' => $user,"rapport"=>$rapport,
        "devices"=>$devices,"matieres"=>$matieres,"chemicals"=>$chemicals]);
        
    }
    public function insert_rapport(Request $request){
        $user = Auth::user()->id;
        $date = $request['date'];
        $time = $request['time'];
        $labo = $request['labo'];
        $activite = $request['activite'];
        $ze_activity = $request['activite'];
        $engineer = $request['engineer'];

        $id = DB::table('rapport')->
        insertGetId(["date"=>$date,"time"=>$time,"labo"=>$labo,"activite"=>$activite,"ze_activity"=>$ze_activity,
        "engineer"=>$engineer,"user_id"=>$user]);
        return Redirect::to('/add_rapport_2/'.$id);
    }
    public function insert_activity(Request $request){
        $user = Auth::user()->id;
        $id_rapport = $request['id_rapport'];
        $type_activity = $request['activite'];
        echo $type_activity;
        if($type_activity =="عمل تطبيقي"){
            $niveau = $request['niveau'];
            $module = $request['module'];
            $teacher = $request['teacher'];
            $sujet_trav = $request['sujet_trav'];
    
            $id = DB::table('activity')->
            insertGetId(["type_activity"=>$type_activity,"teacher"=>$teacher,
            "niveau"=>$niveau,"module"=>$module,"sujet_trav"=>$sujet_trav]);
            DB::table('rapport')->where("id_rapport",$id_rapport)->update(["activite"=>$id]);
            return Redirect::to('/add_outils/'.$id_rapport);
        }elseif($type_activity =="أعمال نهاية الدراسة"){
            $student = $request['student'];
            $sujet_trav = $request['sujet_trav'];
            $id = DB::table('activity')->
            insertGetId(["type_activity"=>$type_activity,"teacher"=>$student,"sujet_trav"=>$sujet_trav]);
            DB::table('rapport')->where("id_rapport",$id_rapport)->update(["activite"=>$id]);

            return Redirect::to('/add_outils/'.$id_rapport);

        }elseif($type_activity =="زيارات"){
            
        }
        
    }

    public function insert_outils(Request $request){

        $devices = $request['devices'];
        if($devices != "" && $devices != NULL){
            foreach($devices as $device){
                $id = DB::table('outils')->
                insertGetId(["id_rapport"=>$device[6],"id_outil"=>$device[0],"type_outil"=>$device[1],
                "charge"=>$device[2],"state_av"=>$device[3],"avis"=>$device[4],"state_after"=>$device[5]]);
                DB::table('tools')->where('id_tool',$device[0])->update(['state'=>$device[3]]);
            }
        }
        
        return "success";
    }   

    public function insert_chemicals(Request $request){

        $devices = $request['devices'];
        if($devices != "" && $devices != NULL){
            foreach($devices as $device){
                DB::table("chemical")->where("id_chemical",$device[0])->decrement("quantity",$device[1]);
                $quantity_now = DB::table("chemical")->where("id_chemical",$device[0])->first()->quantity;
                $id = DB::table('chemicals')->
                insertGetId(["id_rapport"=>$device[2],"id_chemical"=>$device[0],"qty"=>$device[1],"quantity_now"=>$quantity_now]);
            }
        }
        return "success";
    }  
}
