<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
class AdminController extends Controller
{
    public function get_user_list()
    {
        $user_info=Registration::select('*')->get();
        return view ('/db')->with('user_info',$user_info);

    }
    public function save_info(Request $request)
    {
        $data = new Registration;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->date_of_birth = $request->date_of_birth;
        $data->city = $request->city;
        $data->country = $request->country;
        $data->status = $request->status;
        $data->save();
        
        return redirect('user_list');
    }   

    public function delete_user($id)
    {
        Registration::where('id','=',$id)->delete();
        return redirect('user_list'); 
    }

    public function edit_user($id)
    {
        $result = Registration::select('*')->where('id','=',$id)->first();
        return view ('edit')->with('data',$result);
    }

    public function edit_info(Request $request, $id)
    {
        $data = Registration::find($id);
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->date_of_birth = $request->date_of_birth;
        $data->city = $request->city;
        $data->country = $request->country;
        $data->status = $request->status;
        $data->save();
        
        return redirect('user_list');
    }
}
