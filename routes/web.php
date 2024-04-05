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

Route::get("/", [FrontController::class, "index"])->name('front.index');
Route::get("/about", [FrontController::class, "about"])->name('front.about');
Route::get("/blog", [FrontController::class, "blog"])->name('front.blog');
Route::get("/login", [FrontController::class, "login"])->name('front.login');
Route::get("/signup", [FrontController::class, "signup"])->name('front.signup');
Route::get("/blog-details", [FrontController::class, "blogdetails"])->name('front.blog_details');
Route::get("/bus-checkout", [FrontController::class, "buscheckout"])->name('front.bus_checkout');
Route::get("/bus", [FrontController::class, "bus"])->name('front.bus');
Route::get("/cab-checkout", [FrontController::class, "cabcheckout"])->name('front.cab_checkout');
Route::get("/cab", [FrontController::class, "cab"])->name('front.cab');
Route::get("/contact", [FrontController::class, "contact"])->name('front.contact');
Route::get("/faqs", [FrontController::class, "faqs"])->name('front.faqs');
Route::get("/flight-checkout", [FrontController::class, "flightcheckout"])->name('front.flight_checkout');
Route::get("/flight", [FrontController::class, "flight"])->name('front.flight');
Route::get("/forgot", [FrontController::class, "forgot"])->name('front.forgot');
Route::get("/holidays-checkout", [FrontController::class, "holidayscheckout"])->name('front.holidays_checkout');
Route::get("/holidays-details", [FrontController::class, "holidaysdetails"])->name('front.holidays_details');
Route::get("/holidays", [FrontController::class, "holidays"])->name('front.holidays');
Route::get("/hotel-checkout", [FrontController::class, "hotelcheckout"])->name('front.hotel_checkout');
Route::get("/hotel-details", function () {
  return view("front.pages.hotel_details");
})->name('front.hotel_details');
Route::get("/hotel", function () {
  return view("front.pages.hotel");
})->name('front.hotel');
Route::get("/package", function () {
  return view("front.pages.package");
})->name('front.package');
Route::get("/careers", function () {
  return view("front.pages.careers");
})->name('front.careers');

Route::get("/coming_soon", function () {
  return view("front.pages.coming_soon");
})->name('front.coming_soon');

Route::get("/common_page", function () {
  return view("front.pages.common_page");
})->name('front.common_page');

Route::get("/maintenance_mode", function () {
  return view("front.pages.maintenance_mode");
})->name('front.maintenance_mode');

Route::get("/package-details", function () {
  return view("front.pages.package_details");
})->name('front.package_details');
Route::get("/timeline", function () {
  return view("front.pages.timeline");
})->name('front.timeline');


Route::prefix('admin')->middleware('auth.admin')->group(function () {
  Route::get("/", [AdminController::class, "index"])->name('admin.dashboard');
  Route::get("/add-agent", [AdminController::class, "addagent"])->name('admin.add_agent');
  Route::get("/agent", [AdminController::class, "agent"])->name('admin.agent');
  Route::get("/change-password", [AdminController::class, "changepassword"])->name('admin.change_password');
  Route::get("/markup", [AdminController::class, "markup"])->name('admin.markup');
  Route::get("/report", [AdminController::class, "report"])->name('admin.report');
  Route::get("/setting", [AdminController::class, "setting"])->name('admin.setting');
  Route::get("/wallet", [AdminController::class, "wallet"])->name('admin.wallet');
});

Route::prefix('agent')->middleware('auth.agent')->group(function () {
  Route::get("/", [AgentController::class, "index"])->name('agent.dashboard');
  Route::get("/add-markup", [AgentController::class, "addmarkup"])->name('agent.add_markup');
  Route::get("/add-staff", [AgentController::class, "addstaff"])->name('agent.add_staff');
  Route::get("/binvoice", [AgentController::class, "binvoice"])->name('agent.booking_invoice');
  Route::get("/booking", [AgentController::class, "booking"])->name('agent.booking');
  Route::get("/bticket", [AgentController::class, "bticket"])->name('agent.booking_ticket');
  Route::get("/bus-details", [AgentController::class, "busdetails"])->name('agent.bus_details');
  Route::get("/cab-details", [AgentController::class, "cabdetails"])->name('agent.cab_details');
  Route::get("/cab-invoice", [AgentController::class, "cabinvoice"])->name('agent.cab_invoice');
  Route::get("/change-password", [AgentController::class, "changepassword"])->name('agent.change_password');
  Route::get("/finvoice", [AgentController::class, "finvoice"])->name('agent.flight_invoice');
  Route::get("/flight-details", [AgentController::class, "flightdetails"])->name('agent.flight_details');
  Route::get("/fticket", [AgentController::class, "fticket"])->name('agent.flight_ticket');
  Route::get("/hdinvoice", [AgentController::class, "hdinvoice"])->name('agent.holidays_invoice');
  Route::get("/hinvoice", [AgentController::class, "hinvoice"])->name('agent.hotel_invoice');
  Route::get("/holidays-details", [AgentController::class, "holidaysdetails"])->name('agent.holidays_details');
  Route::get("/hotel-details", [AgentController::class, "hoteldetails"])->name('agent.hotel_details');
  Route::get("/markup", [AgentController::class, "markup"])->name('agent.markup');
  Route::get("/report", [AgentController::class, "report"])->name('agent.report');
  Route::get("/setting", [AgentController::class, "setting"])->name('agent.setting');
  Route::get("/staff", [AgentController::class, "staff"])->name('agent.staff');
  Route::get("/wallet", [AgentController::class, "wallet"])->name('agent.wallet');
});


Route::prefix('user')->middleware('auth.user')->group(function () {
  Route::get("/", [UserController::class, "index"])->name('user.dashboard');
  Route::get("/binvoice", [UserController::class, "binvoice"])->name('user.booking_invoice');
  Route::get("/bticket", [UserController::class, "bticket"])->name('user.booking_ticket');
  Route::get("/bus-details", [UserController::class, "busdetails"])->name('user.bus_details');
  Route::get("/cab-details", [UserController::class, "cabdetails"])->name('user.cab_details');
  Route::get("/cab-invoice", [UserController::class, "cabinvoice"])->name('user.cab_invoice');
  Route::get("/change-password", [UserController::class, "changepassword"])->name('user.change_password');
  Route::get("/finvoice", [UserController::class, "finvoice"])->name('user.flight_invoice');
  Route::get("/flight-details", [UserController::class, "flightdetails"])->name('user.flight_details');
  Route::get("/fticket", [UserController::class, "fticket"])->name('user.flight_ticket');
  Route::get("/hdinvoice", [UserController::class, "hdinvoice"])->name('user.holidays_invoice');
  Route::get("/hinvoice", [UserController::class, "hinvoice"])->name('user.hotel_invoice');
  Route::get("/holidays-details", [UserController::class, "holidaysdetails"])->name('user.holidays_details');
  Route::get("/my-bus", [UserController::class, "mybus"])->name('user.my_bus');
  Route::get("/my-cab", [UserController::class, "mycab"])->name('user.my_cab');
  Route::get("/my-flight", [UserController::class, "myflight"])->name('user.my_flight');
  Route::get("/my-holidays", [UserController::class, "myholidays"])->name('user.my_holidays');
  Route::get("/my-hotel", [UserController::class, "myhotel"])->name('user.my_hotel');
  Route::get("/my-profile", [UserController::class, "myprofile"])->name('user.my_profile');
  Route::get("/wallet", [UserController::class, "wallet"])->name('user.wallet');
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