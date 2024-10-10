<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Bcrypt;
use Redirect;
class ToolsController extends Controller
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
    public function tools($type="")
    {
        $real_type = $type;
        if($type =="devices"){
            $type ="جهاز";
        }else{
            $type ="مادة";
        }
        $user = Auth::user();
        $tools = DB::table('tools')->where("type","=",$type)->get();
        return view('tools.tools',['tools' => $tools,"type"=>$real_type,
        'user'=>$user]);
    }
    public function add_tool($type="")
    {
        $user = Auth::user();
        return view('tools.add_tool',['user'=>$user,"type"=>$type]);
    }
    public function edit_tool($id,$type)
    {
        $user = Auth::user();
        $tool = DB::table('tools')->where('id_tool',$id)->first();
        
        return view('tools.edit_tool',['user'=>$user,'tool'=>$tool,"type"=>$type]);
    }
    public function insert_tool(Request $request){
        $name_tool = $request['name_tool'];
        $inventaire = $request['inventaire'];
        $type = $request['type'];
        $state = $request['state'];


        $id = DB::table('tools')->insertGetId(['name_tool'=>$name_tool,
        'inventaire'=>$inventaire,'type'=>$type,'state'=>$state]);
        return Redirect::to('/tools/'.$request['real_type']);
    }
    public function update_tool(Request $request){

        $id = $request['id'];
        $name_tool = $request['name_tool'];
        $inventaire = $request['inventaire'];
        $type = $request['type'];
        $state = $request['state'];


        DB::table('tools')->where('id_tool',$id)->
        update(['name_tool'=>$name_tool,
        'inventaire'=>$inventaire,'type'=>$type,'state'=>$state]);
        return Redirect::to('/tools/'.$request['real_type']);
        
    }
    public function delete_tool($id,$type){
        DB::table('tools')->where('id_tool',$id)->delete();
        return Redirect::to('/tools/'.$type);
    }

    public function chemicals()
    {

        $user = Auth::user();
        $chemicals = DB::table('chemical')->get();
        return view('tools.chemicals',['chemicals' =>$chemicals,'user'=>$user]);
    }
    public function add_chemical()
    {
        $user = Auth::user();
        return view('tools.add_chemical',['user'=>$user]);
    }
    public function edit_chemical($id)
    {
        $user = Auth::user();
        $chemical = DB::table('chemical')->where('id_chemical',$id)->first();
        
        return view('tools.edit_chemical',['user'=>$user,'chemical'=>$chemical]);
    }
    public function insert_chemical(Request $request){
        $name_chemical = $request['name_chemical'];
        $unity = $request['unity'];
        $quantity = $request['quantity'];
        $expiration = $request['expiration'];


        $id = DB::table('chemical')->insertGetId(['name_chemical'=>$name_chemical,
        'unity'=>$unity,'quantity'=>$quantity,'expiration'=>$expiration]);
        return Redirect::to('/chemicals/');
    }
    public function update_chemical(Request $request){

        $id = $request['id'];
        $name_chemical = $request['name_chemical'];
        $unity = $request['unity'];
        $quantity = $request['quantity'];
        $expiration = $request['expiration'];


        DB::table('chemical')->where('id_chemical',$id)->
        update(['name_chemical'=>$name_chemical,
        'unity'=>$unity,'quantity'=>$quantity,'expiration'=>$expiration]);
        return Redirect::to('/chemicals/');
        
    }
    public function delete_chemical($id){
        DB::table('chemical')->where('id_chemical',$id)->delete();
        return Redirect::to('/chemicals/');
    }

}
