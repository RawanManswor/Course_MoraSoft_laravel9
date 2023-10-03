{{--Section Blade System--}}
<html>
<head>
{{--    عندما نريد محتوى ما يتغير بين جميع الصفحات الموروثة على حسب محتوى الصفحة نستخدم yield--}}
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">MoraSoft</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="users">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="posts">Posts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
{{--هذا القسم سوف ينعرض في جميع الصفحات الابناء الذي ورثت هذه الصفحة وكلمة show يعني اعرض محتوى الاب نفسه في الابن--}}
{{--في حال يوجد محتوى نريد ان ينعرض نفسه في جميع الصفحات نستخدم show اذا كانت الصفحة تريد ان تعدل على هذا القسم تقوم باستدعاء هذا القسم واذا كانت تريد ان تضيف شيء على محتوى الأب يجب ان تستخدم parent وفي حال استدعاء هذا القسم ولم يتم كتابة parent سيتم حذف محتوى الأب --}}
@section('sidebar')
    This is the master sidebar.
@show
</body>
</html>
