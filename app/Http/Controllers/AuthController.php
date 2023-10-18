<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{

public function login(Request $request){
    $incomingFields = $request->validate([
        'emailLogin' => 'required',
        'passwordLogin' => 'required'
    ]);
    
    if(auth()->attempt(['email' => $incomingFields['emailLogin'], 'password' => $incomingFields['passwordLogin']])){
        $request->session()->regenerate();
        return redirect('/');
        
    }

    // Handle login failure here
    return back()->withErrors([
        'loginError' => 'The provided credentials do not match our records.',
    ]);
}


    public function register(Request $request){
        $incomingFields = $request->validate([
            'name'=>['required','min:3','max:50'],
            'email'=>['required','email','min:3',Rule::unique('users','email')],
            'password'=>['required','min:6']
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect('/');
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
