<?php
namespace App\Http\Controllers;
use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class User extends Controller
{
    //Masuk ke halamanan dashboard admin
    public function index(){
        //Apabila tidak memiliki session login (blm login)
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('user');
        }
    }
    public function login(){
        return view('login');
    }

    //Cek apakah email, pass sudah  ada di database
    public function loginPost(Request $request){
        $email = $request->email;
        $password = $request->password;
        $data = ModelUser::where('email',$email)->first();
        //Email dan password ada di database
        if(!empty($data)){ //apakah email tersebut ada atau tidak
            //Maka session akan di set(nama, email, password, statusLogin)
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
            return redirect('login')->with('alert','Password atau Email, Salahaa!');
        }
    }
    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }
    public function register(Request $request){
        return view('register');
    }

    //registrasi dan masukin data
    public function registerPost(Request $request){
        //Fungsi untuk validasi
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);
        $data =  new ModelUser();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->is_admin = $request->is_admin;
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

    public static function displayPegawai($data){
        if($data=="0"){
            return "Pengguna";
        }
        else if($data=="1"){
            return "Admin";
        }
        else if($data=="2"){
            return "Transaksi";
        }
        else if($data=="3"){
            return "Keuangan";
        }
        else if($data=="4"){
            return "Customer Service";
        }
    }
}