<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('login', 'Api\AuthController@login');
Route::post('register', 'Api\AuthController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('details', 'Api\AuthController@details');
    Route::get('colloans', 'Api\CollectionLoansController@getColLoans');
    Route::get('loanitems', 'Api\CollectionLoanItemsController@getColLoanItems');
    Route::get('history', 'Api\HistoryDataController@getHistoryData');
});

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Route::post('/register', [AuthController::class, 'register']);