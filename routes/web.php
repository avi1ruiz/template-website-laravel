<?php

use App\Mail\ContactMail;
use App\Models\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('pages.index', ['repositories' => Repository::all()]);
})->name('index');

Route::post('/contact', function (Request $request) {
    // $request->validate([
    //     'name' => 'required',
    //     'email' => 'required|email',
    //     'message' => 'required',
    // ]);

    $mail = new ContactMail($request);

    Mail::to($request->emailContact)->send($mail);

    return redirect('/#home');
})->name('contact');
