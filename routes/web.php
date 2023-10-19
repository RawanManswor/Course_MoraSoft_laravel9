<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\InvokeController;
use App\Http\Controllers\CrudResourseController;
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

//Start Section Route

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
//End Section Route

//Start Blade System (Template Engine)
Route::get('show_name',function(){
    $username = 'Rawan Mansour';
    return view('showName',compact('username'));

});
Route::get('navbar',function (){
    return view('Inheritance.navbar');
});
Route::get('posts',function (){
    return view('posts');
});
//End Blade System (Template Engine)

// Start Controller Resource

//دالة only بحدد فيها الدوال المسموح أن تشتغل بس
//دالة except نحدد فيها الدوال الغير مسموح ان تشتغل أي المستثنية من العمل نحدد الدوال المستبعدة من التنفيذ
Route::resource('crud',CrudResourseController::class)->only(['show']);
// End Controller Resource

// Start Controller Invoke
//لكتابة route من أجل controller invoke لا نذكر اسم الدالة لأنه عندما يرى هذا النوع من الروت يفحص هل هذا الكونترولر انفوك وهل يحتوي على method __invoke أي الدالو الوحيدة التي ميستدعيا الروت واذا لم يكن يحتوي يعرض خطأ يجب ان نذكر ضمن الروت مع اسم الكونترولر اسم الدالة
//إذا كان route يحتوي فقط على اسم الروت واسم الكونترول يفحص هل هذا الكونترول من نوع invoke وبداخله دالة invoke() يقوم بتنفيذها و إلا يظهر خطأ
Route::get('singleAction',InvokeController::class);
// End Controller Invoke
