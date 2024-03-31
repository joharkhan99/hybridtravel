<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('admin.pages.dashboard');
  }
  public function addagent()
  {
    return view('admin.pages.add-agent');
  }
  public function agent()
  {
    return view('admin.pages.agent');
  }
  public function changepassword()
  {
    return view('admin.pages.change-password');
  }
  public function markup()
  {
    return view('admin.pages.markup');
  }
  public function report()
  {
    return view('admin.pages.report');
  }
  public function setting()
  {
    return view('admin.pages.setting');
  }
  public function wallet()
  {
    return view('admin.pages.wallet');
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