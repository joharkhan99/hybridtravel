<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PAPI\APIv3\Client;

class FrontController extends Controller
{
  protected function checkIfUserLoggedIn()
  {
    if (Auth::check()) {
      $user = Auth::user();
      if ($user->role == 'admin') {
        return redirect()->intended('/admin');
      } elseif ($user->role == 'agent') {
        return redirect()->intended('/agent');
      } elseif ($user->role == 'user') {
        return redirect()->intended('/user');
      }
    }
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
    return view("front.pages.home");
  }
  /**
   * Display a listing of the resource.
   */
  public function about()
  {
    //
    return view("front.pages.about");
    // $client = new Client('7245:291e9297-f27d-4a92-8d9c-0b7dcff51fbc');
    // $overview = $client->overview();
    // dd($overview);
  }
  public function blog()
  {
    //
    return view("front.pages.blog");
  }
  public function login()
  {
    if (Auth::check()) {
      $user = Auth::user();
      if ($user->role == 'admin') {
        return redirect()->intended('admin');
      } elseif ($user->role == 'agent') {
        return redirect()->intended('agent');
      } elseif ($user->role == 'user') {
        return redirect()->intended('user');
      }
    } else {
      return view("front.pages.login");
    }
  }
  public function signup()
  {
    if (Auth::check()) {
      $user = Auth::user();
      if ($user->role == 'admin') {
        return redirect()->intended('admin');
      } elseif ($user->role == 'agent') {
        return redirect()->intended('agent');
      } elseif ($user->role == 'user') {
        return redirect()->intended('user');
      }
    } else {
      return view("front.pages.signup");
    }
  }

  public function blogdetails()
  {
    //
    return view("front.pages.blog_details");
  }

  public function buscheckout()
  {
    return view("front.pages.bus_check_out");
  }

  public function bus()
  {
    return view("front.pages.bus");
  }

  public function cabcheckout()
  {
    return view("front.pages.cab_check_out");
  }

  public function cab()
  {
    return view("front.pages.cab");
  }

  public function flightcheckout()
  {
    return view("front.pages.flight_check_out");
  }

  public function flight()
  {
    return view("front.pages.flight");
  }

  public function contact()
  {
    return view("front.pages.contact");
  }

  public function faqs()
  {
    return view("front.pages.faqs");
  }

  public function forgot()
  {
    return view("front.pages.forgot");
  }

  public function holidayscheckout()
  {
    return view("front.pages.holidays_check_out");
  }

  public function holidaysdetails()
  {
    return view("front.pages.holidays_details");
  }

  public function holidays()
  {
    return view("front.pages.holidays");
  }

  public function hotelcheckout()
  {
    return view("front.pages.hotel_check_out");
  }



  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
