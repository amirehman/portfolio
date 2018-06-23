<?php

Route::apiResource('/projects', 'ProjectController');
Route::apiResource('/educations', 'EducationController');
Route::apiResource('/elements', 'ElementController');
Route::apiResource('/experiences', 'ExperienceController');
Route::apiResource('/about', 'AboutController');
Route::apiResource('/general', 'GeneralController');
Route::apiResource('/experiences/{experience}/items', 'ExperienceListController');
Route::apiResource('/experties', 'ExpertiesController');


Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
