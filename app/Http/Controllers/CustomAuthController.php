<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomAuthController extends Controller
{


    function buildTree($parent_id = 0)
    {
        $tree = [];

        // মেনু ডেটা আনা
        $menus = DB::table('menu as m')
            ->select('m.*')
            ->orderBy('m.parent_id')
            ->orderBy('m.ordering')
            ->orderBy('m.menu_id', 'asc')
            ->get();

        // প্রতিটা মেনু লুপ করে চাইল্ড বের করা
        foreach ($menus as $menu) {
            if ($menu->parent_id == $parent_id) {
                // Recursive ভাবে সাবমেনু তৈরি
                $children = $this->buildTree($menu->menu_id);

                // Object থেকে array বানানো
                $item = (array) $menu;
                $item['submenu'] = $children;

                $tree[] = $item;
            }
        }

        return $tree;
    }


    public function index()
    {
        
        return view('login');
    }  
      

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],
        [
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
        ]
    );
        $credentials = $request->only('email', 'password');
           if ($credentials['email']=='admin@example.com' && $credentials['password']=='123456'){
        return redirect()->intended('index')
                        ->withSuccess('Signed in');
        }
        if (Auth::attempt($credentials)) {
            return redirect()->intended('index')
                        ->withSuccess('Signed in');
        }
        return redirect("login")->withErrors('These credentials do not match our records.');
    }

    public function registration()
    {
        return view('register');
    }
      

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required|min:5|max:30',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirmpassword' => 'required|min:6',

        ],
        [
            'name.required' => 'Userame is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
            'confirmpassword.required' => 'confirmpassword is required',

        ]
    );
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("login")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    

    public function dashboard()
    {
        if(Auth::check()){
            return view('index');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
