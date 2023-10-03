{{--Section Blade System--}}
@extends('Inheritance.navbar')
@section('title')
    posts
@endsection
{{--هذه الصفحة تريد ان تعدل على محتوى قسم sidebar وأن تضيف على محتوى الأب في حال نريد الحفاظ على محتوى الأب ونضيف عليه نستدعي parent--}}
@section('sidebar')
    @parent
    <p>this is page posts</p>
@endsection
