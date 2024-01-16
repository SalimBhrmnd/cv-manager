<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if(auth::check()){
        return view('welcome');
    } else {
        return 'not allowed';
    }

});
    Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');

});
Route::post('/register', function (Request $request){
    $user = new User;
    $user->email=$request->email;
    $user->password= $request->password;
    $user->save();
    return $user;
});
