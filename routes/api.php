<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('login', 'LoginController', ['except' => ['destroy']]);
Route::resource('users', 'UserController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);
Route::resource('users-employment-history', 'UserEmploymentHistoryController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);
Route::resource('elders', 'ElderController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);
Route::resource('elders-taken-medicine', 'ElderTakenMedController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);
Route::resource('elders-medical-history', 'ElderMedicalHistoryController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);
Route::resource('medicines', 'MedicineController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);
Route::resource('guests', 'GuestController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);
Route::resource('archives', 'ArchiveController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);
Route::resource('hospitals', 'HospitalController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);
Route::resource('doctors', 'DoctorController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);
Route::resource('tasks', 'TaskController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);
Route::resource('accomplishments', 'AccomplishmentsController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);

//Route::resource('archives-get-all-by-archive', 'ArchiveController@getAllByArchived', ['except' => ['destroy']]);
Route::get('archives-get-all-by-archive', 'ArchiveController@getAllByArchived');