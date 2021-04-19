<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

class LoginController extends Controller
{
    public function ViewUserLogin(Request $r){
        $role_check = $r->session()->get('role');
        if ($r->session()->has('email') && $role_check === 'user' ) {
            $user = session()->get('nama');
            Alert::info('Sudah Login', 'Anda sudah login dengan user '.$user);
            return redirect(route('user.home'));
        }

        return view('user.login');
        
    }

    public function AuthUserLogin(Request $r){
        $role_check = $r->session()->get('role');
        if ($r->session()->has('email') && $role_check === 'user' ) {
            return redirect(route('user.home'));
        }
        $users = \DB::select("SELECT * FROM users WHERE email = '$r->email' && password = '$r->password'");
        if (count($users) === 0) {
            return redirect(route('user.login.auth'));
        }
        session([
            'id_user' => $users[0]->id,
            'email' => $users[0]->email,
            'nama' => $users[0]->nama_user,
            'phone' => $users[0]->phone,
            'role' => 'user'
        ]);

        return redirect(route('user.home'));
    }

    public function ViewUserRegister(Request $r){
        $role_check = $r->session()->get('role');
        if ($r->session()->has('email') && $role_check === 'user' ) {
            $user = session()->get('nama');
            Alert::info('Sudah Login', 'Anda sudah login dengan user '.$user);
            return redirect(route('user.home'));
        }
        return view('user.register');
    }

    public function AuthUserRegister(Request $r){
        $role_check = $r->session()->get('role');
        if ($r->session()->has('email') && $role_check === 'user' ) {
            return redirect(route('user.home'));
        }
        Alert::success('Daftar Berhasil','Silahkan login');
        \DB::insert("INSERT INTO users VALUES (null, '$r->email','$r->phone','$r->nama_user','$r->password')");
        return redirect(route('user.home'));
    }

    public function ViewAdminLogin(Request $r){
        $role_check = $r->session()->get('role');
        if ($r->session()->has('email') && $role_check === 'admin' ) {
            return redirect(route('admin.home'));
        }
        return view('admin.login');
    }

    public function AuthAdminLogin(Request $r){
        $role_check = $r->session()->get('role');
        if ($r->session()->has('email') && $role_check === 'admin' ) {
            return redirect(route('admin.home'));
        }
        $admin = \DB::select("SELECT * FROM admin WHERE email = '$r->email' && password = '$r->password'");

        if (count($admin) === 0) {
            return redirect(route('admin.login.auth'));
        }

        session([
            'id' => $admin[0]->id,
            'email' => $admin[0]->email,
            'nama' => $admin[0]->nama,
            'role' => 'admin'
        ]);

        return redirect(route('admin.home'));
    }

        public function ViewOperatorLogin(Request $r){
            $role_check = $r->session()->get('role');
            if ($r->session()->has('email') && $role_check === 'operator' ) {
            $user = session()->get('nama');
            Alert::info('Sudah Login', 'Anda sudah login dengan user '.$user);
                return redirect(route('operator.home'));
            }
            return view('operator.login');
        }
    

        public function AuthOperatorLogin(Request $r){
            $role_check = $r->session()->get('role');
            if ($r->session()->has('email') && $role_check === 'operator' ) {
                return redirect(route('operator.home'));
            }
            $operator = \DB::select("SELECT * FROM operators WHERE email = '$r->email' && password = '$r->password'");
    
            if (count($operator) === 0) {
                return redirect(route('operator.login.auth'));
            }
    
        session([
            'id' => $operator[0]->id,
            'nama' => $operator[0]->nama,
            'email' => $operator[0]->email,
            'role' => 'operator'
        ]);

        return redirect(route('operator.home'));
    }

    public function logout(Request $r) {
        $role = $r->session()->get('role');

        $r->session()->flush();

        return redirect('/');
    }
}
