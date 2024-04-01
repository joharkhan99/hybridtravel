<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('user.pages.dashboard');
  }

  public function binvoice()
  {
    return view('user.pages.binvoice');
  }

  public function bticket()
  {
    return view('user.pages.bticket');
  }

  public function busdetails()
  {
    return view('user.pages.bus-details');
  }

  public function cabdetails()
  {
    return view('user.pages.cab-details');
  }

  public function cabinvoice()
  {
    return view('user.pages.cab-invoice');
  }

  public function changepassword()
  {
    return view('user.pages.change-password');
  }

  public function finvoice()
  {
    return view('user.pages.finvoice');
  }

  public function flightdetails()
  {
    return view('user.pages.flight-details');
  }

  public function fticket()
  {
    return view('user.pages.fticket');
  }

  public function hdinvoice()
  {
    return view('user.pages.hdinvoice');
  }

  public function hinvoice()
  {
    return view('user.pages.hinvoice');
  }

  public function holidaysdetails()
  {
    return view('user.pages.holidays-details');
  }

  public function mybus()
  {
    return view('user.pages.my-bus');
  }

  public function mycab()
  {
    return view('user.pages.my-cab');
  }

  public function myflight()
  {
    return view('user.pages.my-flight');
  }

  public function myholidays()
  {
    return view('user.pages.my-holidays');
  }

  public function myhotel()
  {
    return view('user.pages.my-hotel');
  }

  public function myprofile()
  {
    return view('user.pages.my-profile');
  }

  public function wallet()
  {
    return view('user.pages.wallet');
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