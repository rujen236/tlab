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



Route::get('/', function () {
    $blogs= DB::table ('blogs')
    ->join('users','users.id','=','blogs.Created By')
    ->select('users.*','blogs.*')
    ->get();
    return view('welcome',compact('blogs'));
});

Route::resource('batch','BatchController');
use App\User;
use App\Profile;
Route::get('/insert',function(){
    $user = User::find(1);
    $profile = new Profile(
        ["mobile"=>"9843761669",
         "phone"=>"5552277",
         "address"=>"Patan",
         "user_id"=>"1"]
    );
    $user->profile()->save($profile);
});
Auth::routes();
Route::get('/update',function(){
    $profile = Profile::where ('user_id',1)->first();
    $profile->mobile = "9843761669";
    $profile->phone = "5552277";
    $profile->address = "Patan";
    $proffile->save();
});

Route::resource('blog','blogcontroller');
Route::resource('profile','Usercontroller');
Route::resource('/home','HomeController@index');
Route::resource('/aboutus','aboutusController');
Auth::routes();

