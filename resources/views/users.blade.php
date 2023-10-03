{{--section route--}}
{{--Section Blade System--}}
<h1>Users</h1>
@extends('Inheritance.navbar')
@section('title')
    users
@endsection
{{--هذه الصفحة تريد ان تعدل على محتوى قسم sidebar ولم يتم استدعاء parent لذلك سيتم حذف محتوى الأب وتضيف فقط محتوى الابن--}}
@section('sidebar')
    <p>this is page users</p>
@endsection
