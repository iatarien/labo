<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Bcrypt;
use Redirect;
class UsersController extends Controller
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
    public function users()
    {
        $user = Auth::user();
        $users = DB::table('users')->get();
        return view('users',['users' => $users,'user'=>$user]);
    }
    public function modify_user($id)
    {
        $user = Auth::user();
        $u = DB::table('users')->where('id',$id)->first();
        $pwd = DB::table('safe')->where('id',$id)->value('password');
        return view('modify_user',['u' => $u,'user'=>$user,'pwd'=>$pwd]);
    }
    public function add_user(Request $request){
        $full_name = $request['full_name'];
        $username = $request['username'];
        $password = Bcrypt($request['password']);
        $position = $request['position'];
        $service = $request['service'];
        $chapitre = $request['chapitre'];
        $photo = 'img/user_avatar.jpg';
        /*
        $query = "insert into users values (NULL,".$username.",".$full_name.",".$position.",".$service.",".$password.",".$photo.")";
        DB::statement($query); */

        $id = DB::table('users')->insertGetId(['full_name'=>$full_name,'username'=>$username,
        'password'=>$password,'position'=>$position,'service'=>$service,'photo'=>$photo,"chapitre"=>$chapitre]);
        DB::table('safe')->insert(['id'=>$id,'password'=>$request['password']]);
        return Redirect::to('/users');
    }
    public function update_user(Request $request){
        $user = Auth::user();
        $id = $request['id'];
        $full_name = $request['full_name'];
        $username = $request['username'];
        $password = Bcrypt($request['password']);
        $position = $request['position'];
        $service = $request['service'];
        $chapitre = $request['chapitre'];
        DB::table('users')->where('id', $id)->update(['full_name'=>$full_name,'username'=>$username,
        'password'=>$password,'position'=>$position,'service'=>$service,"chapitre"=>$chapitre]);
        DB::table('safe')->where('id', $id)->update(['password'=>$request['password']]);
        if($user->service =="Chef des Labos"){
            return Redirect::to('/users');
        }else{
            return Redirect::to('/');
        }
        
    }
    public function delete_user(Request $request){
        DB::table('users')->where('id',$request['id'])->delete();
        DB::table('safe')->where('id',$request['id'])->delete();
        return "success";
    }
    public function chnage_profile_photo(Request $request){
        $file = $request['photo'];
        $id = $request['user_id'];
        $destination0 = public_path().'\uploads\users';
        $destination = 'uploads/users/';
        $name= $destination.$id.'_'.$file->getClientOriginalName();
        $file->move($destination0,$name);
        //echo $destination0;
        DB::table('users')->where('id', $id)->update(['photo'=>$name]);
	//$temp = tempnam(sys_get_temp_dir(),'myApp_');
	//echo $temp;
        return "success";
    }
}
