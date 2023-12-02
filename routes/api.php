<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PostEventController;
use App\Http\Controllers\Api\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);




Route::post('/logout', [AuthController::class, 'logout'])->middleware(['auth:sanctum']);

Route::group(['middleware' => ['auth:sanctum']], function() {

Route::post('/refresh', [AuthController::class, 'refresh']);
Route::get('/user-profile', [AuthController::class, 'userProfile']);
});


Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::controller(PostEventController::class)->group(function(){
        Route::get('/list-post','index');
        Route::post('/register-event','registerEvent');
    });
    Route::controller(UserApiController::class)->group(function(){
        Route::get('/detail/user','getDetailUser');
        Route::post('/update-user/{id}','userUpdate');
    });

});











