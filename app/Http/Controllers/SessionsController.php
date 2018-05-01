<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' =>'required'
        ]);

        if (Auth::attempt($credentials, $request->has('remember'))){
            if(Auth::user()->activated){
                session()->flash('success', 'welcome back!');
                return redirect()->intended(route('users.show', [Auth::user()]));
            }else{
                Auth::logout();
                session()->flash('warning', 'You account has not been activated, please chek your email box.');
                return refirect('/');
            }
        }else{
            session()->flash('danger', 'Sorry your email/password do not match');
            return redirect()->back();
        }
        return;
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success', 'You have been loggout successfully！');
        return redirect('login');
    }
}
