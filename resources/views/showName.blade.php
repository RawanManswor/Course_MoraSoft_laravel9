{{--Section Blade System--}}
{{--هنا عم قلو اطبع المتغير--}}
{{--لا نكتب تاغات ال php ونكتب ضمنها اكواد php ضمن صفحات ال blade--}}
{{--لرؤية كود ال php المقابل للكود المكتوب ضمن صفحة ال blade نذهب إلى storage ثم إلى framework ثم الى views رح نشوف فيها جميع الصفحات المقابلة لصفحات الblade --}}
{!! $username !!}

@name($username)
    admin
@else
    user
@endname

@for($i=0;$i<=10;$i++)
    {{ $i }}
@endfor


