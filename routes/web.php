<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('businesses', App\Http\Controllers\businessesController::class);
Route::resource('channels', App\Http\Controllers\channelsController::class);
Route::resource('channelsbusinesses', App\Http\Controllers\channelsbusinessController::class);
Route::resource('media', App\Http\Controllers\mediaController::class);
Route::resource('messages', App\Http\Controllers\MessagesController::class);
Route::resource('redcrescents', App\Http\Controllers\RedcrescentsController::class);



Route::resource('stctemplates', App\Http\Controllers\StctemplatesController::class);
Route::resource('stcusers', App\Http\Controllers\StcusersController::class);
Route::resource('conversations', App\Http\Controllers\ConversationsController::class);
Route::resource('locations', App\Http\Controllers\locationsController::class);
Route::resource('clients', App\Http\Controllers\ClientsController::class);
Route::resource('users', App\Http\Controllers\usersController::class);
Route::resource('roles', App\Http\Controllers\rolesController::class);
Route::get('/users/assignroles/{id}', 'App\Http\Controllers\UsersController@assignRoles')->name('users.assignroles');
Route::patch('/users/updateroles/{id}', 'App\Http\Controllers\UsersController@updateRoles')->name("roles.rolesupdate");
Route::resource('permissions', App\Http\Controllers\permissionsController::class);
Route::get('/roles/assignpermissions/{id}', 'App\Http\Controllers\RolesController@assignPermissions')->name('roles.assignpermissions');
Route::patch('/roles/updatepermissions/{id}', 'App\Http\Controllers\RolesController@updatePermissions')->name("roles.permissionsupdate");Route::get('/roles/assignpermissions/{id}', 'App\Http\Controllers\RolesController@assignPermissions')->name('roles.assignpermissions');
Route::patch('/roles/updatepermissions/{id}', 'App\Http\Controllers\RolesController@updatePermissions')->name("roles.permissionsupdate");Route::get('/messages/{conversation_id}', [MessagesController::class, 'index']);
Route::get('/messages/{conversation_id}', [MessagesController::class, 'index']);
