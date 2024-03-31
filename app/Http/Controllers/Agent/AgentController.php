<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgentController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view("agent.pages.dashboard");
  }

  public function addmarkup()
  {
    return view("agent.pages.add-markup");
  }

  public function addstaff()
  {
    return view("agent.pages.add-staff");
  }

  public function binvoice()
  {
    return view("agent.pages.binvoice");
  }

  public function booking()
  {
    return view("agent.pages.booking");
  }

  public function bticket()
  {
    return view("agent.pages.bticket");
  }

  public function busdetails()
  {
    return view("agent.pages.bus-details");
  }

  public function cabdetails()
  {
    return view("agent.pages.cab-details");
  }

  public function cabinvoice()
  {
    return view("agent.pages.cab-invoice");
  }

  public function changepassword()
  {
    return view("agent.pages.change-password");
  }

  public function finvoice()
  {
    return view("agent.pages.finvoice");
  }

  public function flightdetails()
  {
    return view("agent.pages.flight-details");
  }

  public function fticket()
  {
    return view("agent.pages.fticket");
  }

  public function hdinvoice()
  {
    return view("agent.pages.hdinvoice");
  }

  public function hinvoice()
  {
    return view("agent.pages.hinvoice");
  }

  public function holidaysdetails()
  {
    return view("agent.pages.holidays-details");
  }

  public function hoteldetails()
  {
    return view("agent.pages.hotel-details");
  }

  public function markup()
  {
    return view("agent.pages.markup");
  }

  public function report()
  {
    return view("agent.pages.report");
  }

  public function setting()
  {
    return view("agent.pages.setting");
  }

  public function staff()
  {
    return view("agent.pages.staff");
  }

  public function wallet()
  {
    return view("agent.pages.wallet");
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