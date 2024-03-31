<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function __construct()
  {
    // $this->middleware('auth:api');
  }


  public function register(Request $request)
  {
    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => bcrypt($request->password)
    ]);

    $token = auth()->login($user);

    return response()->json([
      'token' => $token,
      'token_type' => 'bearer',
    ]);
  }
}