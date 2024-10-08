<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\EtudiantController;

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
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

//  Route::get('/etudiant', function () {
//      $nom= 'hamza';
//      $prenom='ataoui';
    
//      return view('etudiant',compact('nom','prenom'));
// });

Route::get('/etudiant', [EtudiantController::class,"index"]);
// Route::resource('etudiant', 'App\Http\Controllers\EtudiantController.php');




