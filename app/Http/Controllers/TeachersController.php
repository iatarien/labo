<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Bcrypt;
use Redirect;
class TeachersController extends Controller
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
    
    public function teachers()
    {
 
         $user = Auth::user();
         $teachers = DB::table('teachers')->get();
         return view('teachers.teachers',['teachers' =>$teachers,'user'=>$user]);
    }
     public function add_teacher()
     {
         $user = Auth::user();
         return view('teachers.add_teacher',['user'=>$user]);
     }
     public function edit_teacher($id)
     {
         $user = Auth::user();
         $teacher = DB::table('teachers')->where('id_teacher',$id)->first();
         
         return view('teachers.edit_teacher',['user'=>$user,'teacher'=>$teacher]);
     }
     public function insert_teacher(Request $request){
        $name_teacher = $request['name_teacher']; 
        $id = DB::table('teachers')->insertGetId(['name_teacher'=>$name_teacher]);
        return Redirect::to('/teachers/');
     }
     public function update_teacher(Request $request){
 
        $id = $request['id'];
        $name_teacher = $request['name_teacher']; 

        DB::table('teachers')->where('id_teacher',$id)->
        update(['name_teacher'=>$name_teacher]);
        return Redirect::to('/teachers/');
         
     }
     public function delete_teacher($id){
         DB::table('teachers')->where('id_teacher',$id)->delete();
         return Redirect::to('/teachers/');
     }

}
