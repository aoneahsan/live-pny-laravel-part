<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');


// Project Admin Roues
	Route::redirect('/','/home');
	Route::redirect('/home','/admin');
	
	Route::group([
		'middleware' => 'roles',
		'roles' => ['Super Admin', 'Admin'],
		'namespace' => 'Admin',
	], function () {

		// Dashborad Routes
		Route::get('/admin', [
			'uses' => 'SystemController@showDashborad',
		]);

		// assign roles to user Route
		Route::get('check-role',[
			'uses' => 'RoleController@CheckRole',
		]);
		Route::post('/assignrole',[
			'uses' => 'RoleController@assignRole',
			'as' => 'assign.roles',
		]);
	
		// Users Routes
		Route::get('admin/users/admins', 'UserController@AdminUsers');
		Route::get('admin/users/banned', 'UserController@BannedUsers');
		Route::get('admin/users/{id}/ban', 'UserController@BanUser');
		Route::get('admin/users/{id}/unban', 'UserController@UnBanUser');
		Route::resource('admin/users', 'UserController');

		// Stydent Feedbacks Routes
		Route::resource('admin/student-feedbacks', 'StudentFeedbackController');

		// Stydent Enroll Routes		
		Route::get('admin/student-enroll/add-student', 'EnrollStudentController@addStudent');
		Route::post('admin/student-enroll/add-student/action', 'EnrollStudentController@addStudentAction');
		Route::resource('admin/student-enroll', 'EnrollStudentController');
		Route::resource('admin/faq', 'FAQController');

		// Route for Site Forms
		Route::get('admin/site-forms', 'SiteController@ShowSiteForms');
		Route::get('admin/subscribers', 'SiteController@ShowSubscribers');

	});