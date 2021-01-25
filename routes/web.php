<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorsController;

/*php
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
// Route::get('/form1', function () {
//     return view('form1');
// });

// Route::get('/visitors/create' ,[VisitorsController::class, 'create']);
Route::get('visitors',[VisitorsController::class,'index']);
Route::get('visitors/create',[VisitorsController::class,'create']);
Route::post('add', [VisitorsController::class,'add']);

