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

    public function add_rapport()
    {   

        $user = Auth::user();
        return view('rapport.ajouter',['user' => $user]);
        
    }
   


    public function insert_op(Request $request){
        $user = Auth::user()->id;
        $secteur = $request['secteur'];
        $programme = $request['programme'];
        $sous_programme = $request['sous_id'];
        $annee = $request['annee'];
        $numero = $request['numero'];
        $intitule = $request['intitule'];
        $intitule = $request['intitule'];
        $date = $request['date'];
        $source = $request['source'];

        $AP_init = floatval($request['AP_init']);
        $reevaluation = 0;
        $AP_act = $AP_init;
        $taux = 0;
        $observations = "";        
        $num_cloture = NULL;
        $date_cloture = NULL;
        $id = DB::table('projet')->
        insertGetId(["secteur"=>$secteur,"programme"=>$programme,
        "sous_programme"=>$sous_programme,'numero'=>$numero,'intitule'=>$intitule,
        'intitule'=>$intitule,'date'=>$date,'source'=>$source,'annee'=>$annee,
        'AP_init'=>$AP_init,'reevaluation'=>$reevaluation,'AP_act'=>$AP_act,
        'taux'=>$taux,"observations"=>$observations,'num_cloture'=>$num_cloture,
        'date_cloture'=>$date_cloture,"user_id"=>$user]);
        return Redirect::to('/projet/all');
    }

    public function update_op(Request $request){
        $user = Auth::user();
        $id = $request['id_op'];
        if($user->service =="Comptabilité"){
            $secteur = $request['secteur'];
            $programme = $request['programme'];
            $sous_programme = $request['sous_id'];
            $annee = $request['annee'];
            $numero = $request['numero'];
            $intitule = $request['intitule'];
            $intitule = $request['intitule'];
            $date = $request['date'];
            $source = $request['source'];
            $AP_init = floatval($request['AP_init']);
            $reevaluation = floatval($request['reevaluation']);
            $AP_act = floatval($AP_init) + $reevaluation;
            $taux = $request['taux'];
            $observations = $request['observations'];        
            $num_cloture = $request['num_cloture'];
            $date_cloture = $request['date_cloture'];
            DB::table('projet')->where('id',$id)->
            update(["secteur"=>$secteur,"programme"=>$programme,
            "sous_programme"=>$sous_programme,'numero'=>$numero,'intitule'=>$intitule,
            'intitule'=>$intitule,'date'=>$date,'source'=>$source,'annee'=>$annee,
            'AP_init'=>$AP_init,'reevaluation'=>$reevaluation,'AP_act'=>$AP_act,
            'taux'=>$taux,"observations"=>$observations,'num_cloture'=>$num_cloture,
            'date_cloture'=>$date_cloture]);
        }elseif($user->service =="Suivi"){
            
            $taux = $request['taux'];
            $observations = $request['observations'];   
            DB::table('projet')->where('id',$id)->
            update(['taux'=>$taux,"observations"=>$observations]);
        }elseif($user->service =="Cloture"){
            $num_cloture = $request['num_cloture'];
            $date_cloture = $request['date_cloture'];     

            DB::table('projet')->where('id',$id)->
            update(['num_cloture'=>$num_cloture,'date_cloture'=>$date_cloture]);

        }
 
        return Redirect::to('/projet/all');
    }
    
}
