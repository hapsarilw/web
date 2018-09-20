<?php
namespace App\Http\Controllers;
use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class User extends Controller
{
    //
    public function index(){
        $data = ModelUser::all();
        return view('user',compact('data'));
    }
    public function login(){
        return view('login');
    }
    public function loginPost(Request $request){
        $email = $request->email;
        $password = $request->password;
        $data = ModelUser::where('email',$email)->first();
        if(is_array($data) > 0){ //apakah email tersebut ada atau tidak
            if($password == $data->password){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('home_user');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !'.Hash::check($password,$data->password));
            }
        }
        else{
            return redirect('home_user');
        }
    }
    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }
    public function register(Request $request){
        return view('register');
    }
    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);
        $data =  new ModelUser();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success','Kamu berhasil Register');
    }
    public function edit($id)
    {
        $data = ModelUSer::where('id',$id)->get();

        return view('user_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = ModelUser::where('id',$id)->first();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        //Ganti tinyint jd string disini
        $data->is_admin = $request->is_admin;
        $data->save();
        return redirect()->route('user.index')->with('alert-success','Data berhasil diubah!');
    }
    public function destroy($id)
    {
        $data = ModelUser::where('id',$id)->first();
        $data->delete();
        return redirect()->route('user.index')->with('alert-success','Data berhasi dihapus!');
    }

}