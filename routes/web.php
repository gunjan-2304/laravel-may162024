<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('mp')->group(function () {
    Route::get('/bhopal', function () {
        // Matches The "/admin/users" URL
        return view('mp.bhopal');
    });
    Route::get('/indore', function () {
        // Matches The "/admin/users" URL
        return view('mp.indore');
    });
    Route::get('/neemuch', function () {
        // Matches The "/admin/users" URL
        return view('mp.neemuch') ;
    });
});
Route::prefix('rj')->group(function () {
    Route::get('/jaipur', [Citycontroller::class, 'jaipur']);
    
    
   // function () 
    //{
        // Matches The "/admin/users" URL
  //      return view('rj.jaipur');
   // });
   // Route::get('/udaipur', function () {
        // Matches The "/admin/users" URL
      //  return view('rj.udaipur');
   // });
   // Route::get('/ajmer', function () {
        // Matches The "/admin/users" URL
       // return view('rj.ajmer') ;
   // });
});