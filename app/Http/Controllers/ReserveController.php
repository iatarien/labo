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
    
     public function reserve($id_reserve)
    {   
        $user = Auth::user();
        $reserve = DB::table('reserves')->where('id_reserve',$id_reserve)->first();

        return view('attestations.fiche',['user'=> $user,"reserve"=>$reserve,
        "id_reserve"=>$id_reserve]);

    }
    public function add_reserve($rapport="",$outil="",$state="")
    {   
        $user = Auth::user();

        return view('reserves.add_reserve',['user'=> $user,"rapport"=>$rapport,
        "outil"=>$outil,"state"=>$state]);

    }
    public function reserve_before($rapport_id,$outil,$state)
    {   
       
        $user = Auth::user();
        $rapport = DB::table('rapport')->
        leftjoin("users","rapport.engineer","users.id")->
        where('id_rapport',$rapport_id)->first();
        $activity = Db::table('activity')->join("niveau","activity.niveau","=","niveau.id_niveau")
        ->join('module',"module.id_module","=","activity.module")
        ->join('teachers',"teachers.id_teacher","=","activity.teacher")
        ->where('id_activity',$rapport->activite)->first();
        $year = explode("-",$rapport->date)[0];
        $last_num = DB::select(DB::raw("SELECT MAX(num_reserve) as max FROM reserves
        WHERE year = ".$year))[0]->max;
        $num = $last_num +1;
        return view('attestations.reserve_before',['user'=> $user,"rapport"=>$rapport,
        "activity"=>$activity,"outil"=>$outil,"num"=>$num,"year"=>$year,"state"=>$state]);
    }
    public function reserve_after($rapport_id,$outil,$state)
    {   
        $user = Auth::user();
        $rapport = DB::table('rapport')->where('id_rapport',$rapport_id)->first();
        $activity = Db::table('activity')->join("niveau","activity.niveau","=","niveau.id_niveau")
        ->join('module',"module.id_module","=","activity.module")
        ->join('teachers',"teachers.id_teacher","=","activity.teacher")
        ->where('id_activity',$rapport->activite)->first();
        $year = explode("-",$rapport->date)[0];
        $last_num = DB::select(DB::raw("SELECT MAX(num_reserve) as max FROM reserves
        WHERE year = ".$year))[0]->max;
        $num = $last_num +1;
        return view('attestations.reserve_after',['user'=> $user,"rapport"=>$rapport,
        "activity"=>$activity,"outil"=>$outil,"num"=>$num,"year"=>$year,"state"=>$state]);
    }
    public function demande_access($id="")
    {   
        $user = Auth::user();
        return view('attestations.demande_access',['user'=> $user]);
    }
    public function engagement($id="")
    {   
        $user = Auth::user();
        return view('attestations.engagement',['user'=> $user]);
    }
    public function visite($id="")
    {   
        $user = Auth::user();
        return view('attestations.visite',['user'=> $user]);
    }
    public function prise($id="")
    {   
        $user = Auth::user();
        return view('attestations.prise',['user'=> $user]);
    }
    public function after_prise($id="")
    {   
        $user = Auth::user();
        return view('attestations.after_prise',['user'=> $user]);
    }
    public function insert_reserve(Request $request)
    {   
        $user = Auth::user();
        $rapport = $request["rapport"];
        $outil = $request["outil"];
        $state = $request["state"];
        $html = $request["html"];
        $year = $request["year"];
        $num = $request["num"];
        
        $id = DB::table('reserves')->
        insertGetId(["rapport"=>$rapport,"num_reserve"=>$num,"html"=>$html,
        "outil"=>$outil,"state"=>$state,"user"=>$user->id,"year"=>$year]);
        
        return "success";

    }
    public function update_reserve(Request $request)
    {   
        $user = Auth::user();
        $html = $request["html"];
        $num = $request["num"];
        $id_reserve = $request["id_reserve"];

        DB::table('reserves')->where('id_reserve',$id_reserve)->
        update(["num_reserve"=>$num,"html"=>$html]);
        
        return "success";

    }
    public function close(){
        return view('close');
    }
}
