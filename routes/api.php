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

Route::post('lp_contact_action','Admin\SiteController@ContactPageForm');
Route::get('getallstudentfeedbacks','Admin\StudentFeedbackController@getallstudentfeedbacks');
Route::post('getallfaq','Admin\FAQController@getAllFAQs');
Route::apiResource('lp_enroll_action','Admin\EnrollStudentController');
Route::post('site-form','Admin\SiteController@allSiteFormsAction');