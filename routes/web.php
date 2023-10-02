<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('welcome');
});

//Section Route

//نستخدم route get لتنقل بين الصفحات فقط
Route::get('users',function(){
//    return "users";
    return view('users');
});


//يظهر خطأ مضمونه بإن الroute التي تريد زيارته لم يأتي عن طريقrequestاي ان ال post بتاخد request
//ال post بتاخد request يعني ان الpost بتاخد form اي في بيانات يبعتها المستخدم لسيرفر ضمن الفورم وبناء عليه السيرفر يبعت له بيانات او يخزن البيانات في ال db
//نستخدم route post عندما يكون لدينا فورم ونرسل بيانات ولدينا request اي اذا بدي زور صفحة لازم كون جاي من فورم

Route::post('users',function(){
//    return "users";
    return view('users');
});

Route::get('/create_user',function(){
    return view('createUser');
});
//post جابت معها بيانات و request
Route::post('users',function (Request $request){
    return $request;
});

//نستخدم بارامتر مع route get عندما نريد تنقل بين الصفحات مع ارسال بيانات
//إذا نريد استخدام get ونحتاج لإرسال بيانات مع ال route نضع معه بارامتر

Route::get('/show/{name}',function (string $name){
    if($name === 'rawan'){
        return 'admin';
    }
        return 'user';
});
