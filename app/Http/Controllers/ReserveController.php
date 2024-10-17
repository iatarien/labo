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
    public function demande_access($id_rapport="")
    {   
        $user = Auth::user();
        $rapport = DB::table('rapport')->
        leftjoin("users","rapport.engineer","users.id")->
        where('id_rapport',$id_rapport)->first();
        $year = explode("-",$rapport->date)[0];
        $last_num = DB::select(DB::raw("SELECT MAX(num_autorisation) as max FROM autorisations
        WHERE year = ".$year))[0]->max;
        $num = $last_num +1;
        return view('attestations.demande_access',['user'=> $user,"year"=>$year,"num"=>$num]);
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
        $num = $request["num"];
        $id_reserve = $request["id_reserve"];
        $html = $request["html"];

        DB::table('reserves')->where('id_reserve',$id_reserve)->
        update(["num_reserve"=>$num,"html"=>$html]);
        return "success";
    }
    public function insert_autorisation(Request $request)
    {   
        $user = Auth::user();

        $nom = $request["nom"];
        $prenom = $request["prenom"];
        $telephone = $request["telephone"];
        $email = $request["email"];

        $student = DB::table('students')->
        insertGetId(["nom"=>$nom,"prenom"=>$prenom,"telephone"=>$telephone,
        "email"=>$email]);

        $num_autorisation = $request["num"];
        
        $de = $request["de"];
        $a = $request["a"];
        $html = $request["html"];
        $year = $request["year"];
       
        
        $id = DB::table('autorisations')->
        insertGetId(["num_autorisation"=>$num_autorisation,"id_student"=>$student,
        "html"=>$html,
        "de"=>$de,"a"=>$a,"year"=>$year]);
        
        return $de."1989raouf1989".$a."1989raouf1989".$student."1989raouf1989".$num_autorisation;

    }
    public function update_autorisation(Request $request)
    {   

        $user = Auth::user();
        $nom = $request["nom"];
        $prenom = $request["prenom"];
        $telephone = $request["telephone"];
        $email = $request["email"];
        $id = $request["id_autorisation"];

        $student = DB::table('autorisations')->where('id_autorisation',$id)->first()->id_student;

        DB::table('students')->where("id_student",$student)->
        update(["nom"=>$nom,"prenom"=>$prenom,"telephone"=>$telephone,
        "email"=>$email]);

        $num_autorisation = $request["num"];
        $de = $request["de"];
        $a = $request["a"];
        $html = $request["html"];

        $id = DB::table('autorisations')->where("id_autorisation",$id)->
        update(["num_autorisation"=>$num_autorisation,
        "html"=>$html,
        "de"=>$de,"a"=>$a]);
        
        return $de."1989raouf1989".$a."1989raouf1989".$student."1989raouf1989".$num_autorisation;

    }
    public function close(){
        return view('close');
    }
}
