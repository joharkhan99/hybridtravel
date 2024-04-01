<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
  public function __construct()
  {
    // $this->middleware('auth:api');
  }


  public function signup(Request $request)
  {
    $request->validate([
      'name' => 'required|string',
      'email' => 'required|email|unique:users',
      'password' => 'required|string|min:6',
    ]);

    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => bcrypt($request->password)
    ]);

    $credentials = $request->only('email', 'password');
    Auth::attempt($credentials);
    $request->session()->regenerate();
    // return response()->json(['message' => 'User created successfully', 'user' => $user]);
    return redirect()->route('/user');
  }

  public function login(Request $request)
  {
    $credentials = $request->validate([
      'email' => 'required|email',
      'password' => 'required|string',
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();
      $user = Auth::user();
      if ($user->role === 'admin') {
        return redirect()->intended('/admin');
      } elseif ($user->role === 'agent') {
        return redirect()->intended('/agent');
      } elseif ($user->role === 'user') {
        return redirect()->intended('/user');
      }
    }

    return back()->withErrors([
      'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
  }

  public function logout(Request $request)
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('login')->with('message', 'Logged out successfully');
  }

  public function redirectToGoogle()
  {
    return Socialite::driver('google')->redirect();
  }

  public function handleGoogleCallback()
  {
    // $user = Socialite::driver('google')->user();
    // $existingUser = User::where('email', $user->email)->first();
    // if ($existingUser) {
    //   Auth::login($existingUser, true);
    // } else {
    //   $newUser = User::create([
    //     'name' => $user->name,
    //     'email' => $user->email,
    //     'password' => bcrypt('password')
    //   ]);
    //   Auth::login($newUser, true);
    // }
    // return redirect()->to('/user');

    // $user = Socialite::driver('google')->user();
    // dd($user);

    try {
      $user = Socialite::driver('google')->user();
      $existingUser = User::where('email', $user->email)->first();
      if ($existingUser) {
        Auth::login($existingUser, true);
      } else {
        $newUser = User::create([
          'name' => $user->name,
          'email' => $user->email,
          'password' => bcrypt($user->token),
          'avatar' => $user->avatar
        ]);
        Auth::login($newUser, true);
      }
      return redirect()->to('/user');
    } catch (\Throwable $th) {
      throw $th;
    }
  }
}