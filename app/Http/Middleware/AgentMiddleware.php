<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AgentMiddleware
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    if (!Auth::check()) {
      return redirect()->route('login')->withErrors([
        'email' => 'The provided credentials do not match our records.',
      ])->onlyInput('email');
    }
    $user = Auth::user();
    if ($user->role !== 'agent') {
      return redirect()->route('login')->withErrors([
        'message' => 'Unauthorized Access!'
      ]);
    }
    return $next($request);
  }
}