<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Agent\AgentController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get("/", [FrontController::class, "index"]);
Route::get("/about", [FrontController::class, "about"]);
Route::get("/blog", [FrontController::class, "blog"]);
Route::get("/login", [FrontController::class, "login"]);
Route::get("/signup", [FrontController::class, "signup"])->name('signup');
Route::get("/blog-details", [FrontController::class, "blogdetails"]);
Route::get("/bus-checkout", [FrontController::class, "buscheckout"]);
Route::get("/bus", [FrontController::class, "bus"]);
Route::get("/cab-checkout", [FrontController::class, "cabcheckout"]);
Route::get("/cab", [FrontController::class, "cab"]);
Route::get("/contact", [FrontController::class, "contact"]);
Route::get("/faqs", [FrontController::class, "faqs"]);
Route::get("/flight-checkout", [FrontController::class, "flightcheckout"]);
Route::get("/flight", [FrontController::class, "flight"]);
Route::get("/forgot", [FrontController::class, "forgot"]);
Route::get("/holidays-checkout", [FrontController::class, "holidayscheckout"]);
Route::get("/holidays-details", [FrontController::class, "holidaysdetails"]);
Route::get("/holidays", [FrontController::class, "holidays"]);
Route::get("/hotel-checkout", [FrontController::class, "hotelcheckout"]);

Route::prefix('admin')->middleware('auth.admin')->group(function () {
  Route::get("/", [AdminController::class, "index"]);
  Route::get("/add-agent", [AdminController::class, "addagent"]);
  Route::get("/agent", [AdminController::class, "agent"]);
  Route::get("/change-password", [AdminController::class, "changepassword"]);
  Route::get("/markup", [AdminController::class, "markup"]);
  Route::get("/report", [AdminController::class, "report"]);
  Route::get("/setting", [AdminController::class, "setting"]);
  Route::get("/wallet", [AdminController::class, "wallet"]);
});

Route::prefix('agent')->middleware('auth.agent')->group(function () {
  Route::get("/", [AgentController::class, "index"]);
  Route::get("/add-markup", [AgentController::class, "addmarkup"]);
  Route::get("/add-staff", [AgentController::class, "addstaff"]);
  Route::get("/binvoice", [AgentController::class, "binvoice"]);
  Route::get("/booking", [AgentController::class, "booking"]);
  Route::get("/bticket", [AgentController::class, "bticket"]);
  Route::get("/bus-details", [AgentController::class, "busdetails"]);
  Route::get("/cab-details", [AgentController::class, "cabdetails"]);
  Route::get("/cab-invoice", [AgentController::class, "cabinvoice"]);
  Route::get("/change-password", [AgentController::class, "changepassword"]);
  Route::get("/finvoice", [AgentController::class, "finvoice"]);
  Route::get("/flight-details", [AgentController::class, "flightdetails"]);
  Route::get("/fticket", [AgentController::class, "fticket"]);
  Route::get("/hdinvoice", [AgentController::class, "hdinvoice"]);
  Route::get("/hinvoice", [AgentController::class, "hinvoice"]);
  Route::get("/holidays-details", [AgentController::class, "holidaysdetails"]);
  Route::get("/hotel-details", [AgentController::class, "hoteldetails"]);
  Route::get("/markup", [AgentController::class, "markup"]);
  Route::get("/report", [AgentController::class, "report"]);
  Route::get("/setting", [AgentController::class, "setting"]);
  Route::get("/staff", [AgentController::class, "staff"]);
  Route::get("/wallet", [AgentController::class, "wallet"]);
});

Route::prefix('user')->middleware('auth.user')->group(function () {
  Route::get("/", [UserController::class, "index"]);
  Route::get("/binvoice", [UserController::class, "binvoice"]);
  Route::get("/bticket", [UserController::class, "bticket"]);
  Route::get("/bus-details", [UserController::class, "busdetails"]);
  Route::get("/cab-details", [UserController::class, "cabdetails"]);
  Route::get("/cab-invoice", [UserController::class, "cabinvoice"]);
  Route::get("/change-password", [UserController::class, "changepassword"]);
  Route::get("/finvoice", [UserController::class, "finvoice"]);
  Route::get("/flight-details", [UserController::class, "flightdetails"]);
  Route::get("/fticket", [UserController::class, "fticket"]);
  Route::get("/hdinvoice", [UserController::class, "hdinvoice"]);
  Route::get("/hinvoice", [UserController::class, "hinvoice"]);
  Route::get("/holidays-details", [UserController::class, "holidaysdetails"]);
  Route::get("/my-bus", [UserController::class, "mybus"]);
  Route::get("/my-cab", [UserController::class, "mycab"]);
  Route::get("/my-flight", [UserController::class, "myflight"]);
  Route::get("/my-holidays", [UserController::class, "myholidays"]);
  Route::get("/my-hotel", [UserController::class, "myhotel"]);
  Route::get("/my-profile", [UserController::class, "myprofile"]);
  Route::get("/wallet", [UserController::class, "wallet"]);
});

Route::post("/signup", [AuthController::class, "signup"])->name('signup');
Route::post("/login", [AuthController::class, "login"])->name('login');
Route::post("/logout", [AuthController::class, "logout"])->name('logout');

Route::post('/auth/oauth/redirect/google', [AuthController::class, 'redirectToGoogle'])->name('google');
Route::get('/auth/oauth/callback/google', [AuthController::class, 'handleGoogleCallback']);

// Route::get('/auth/oauth/callback/google', function () {
//   try {
//     $user = Socialite::driver('google')->user();
//     dd($user);
//   } catch (\Throwable $th) {
//     throw $th;
//   }
// });


Route::fallback(function () {
  return view("front.pages.404");
});