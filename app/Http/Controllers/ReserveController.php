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
     
    public function add_reserve($rapport="",$outil="",$state="")
    {   
        $user = Auth::user();

        return view('reserves.add_reserve',['user'=> $user,"rapport"=>$rapport,
        "outil"=>$outil,"state"=>$state]);

    }
    public function reserve_before($id="")
    {   
        $user = Auth::user();
        return view('attestations.reserve_before',['user'=> $user]);
    }
    public function reserve_after($id="")
    {   
        $user = Auth::user();
        return view('attestations.reserve_after',['user'=> $user]);
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
        
        $id = DB::table('reserves')->
        insertGetId(["rapport"=>$rapport,
        "outil"=>$outil,"state"=>$state,"user"=>$user->id]);

        return Redirect::to('/close');
    }
    public function close(){
        return view('close');
    }
}
