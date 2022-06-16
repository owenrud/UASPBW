<?php

  namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use App\Models\User;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;
    
    class AuthController extends Controller
    {
        public function user(){
            $user = User::paginate(5);
            return view('user',['User'=>$user]);
        }
        public function formuser(){
            return view('formuser');
        }
        public function formedituser($id){
            $user = User::find($id);
            return view('formedituser',['user'=>$user]);
        }
        public function simpanuser(Request $request){
            $user = User::create([
                'nik_user'=>$request->nik,
                'nama_user'=>$request->nama,
                'no_hp'=>$request->no_hp,
                'password'=>bcrypt($request->password)
            ]);
    
            return redirect('/user');
        }

        public function updateuser($id,Request $request){
            $user = User::find($id);
            $user->nik_user = $request->nik;
           $user->nama_user = $request->nama;
           $user->no_hp = $request->no_hp;
           $user->password = bcrypt($request->password);
           $user->save();
           return redirect('/user')->with('alert','Data Berhasil di Update');
        
        }
        public function hapususer($id){
            $user = User::find($id);
           $user->delete();
           return redirect('/user')->with('alert','Data Berhasil di Hapus');
        
        }
        public function userdashboard(){
            return view('dashboard');
        }

        public function login(){
            return view('loginform');
        }
        
        public function ceklogin(Request $request){
            $validator = Validator::make($request->all(), [
                'no_hp' => 'required|max:255',
                'password' => 'required',
            ]);
     
            // Retrieve the validated input...
            $validated = $validator->validated();
             //dd($validated);
            if(!Auth::attempt($validated)){
                return redirect('/login');
            }
            else{
                return redirect('/mahasiswa');
            }
        }
        public function logout(){
            Auth::logout();
            return redirect('/login')->with('message', 'You have been logged out');
        }
    }
    

