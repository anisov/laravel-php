<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админка</title>
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>
<div class="admin-container">
    <ul class="admin-menu">
        <li class="admin-menu__el"><a href="{{route('admin-categories')}}" class="admin-menu__link">Категории</a></li>
        <li class="admin-menu__el"><a href="{{route('admin-products')}}" class="admin-menu__link">Товары</a></li>
        <li class="admin-menu__el"><a href="{{route('admin-product-create')}}" class="admin-menu__link">Добавить товар</a></li>
        <li class="admin-menu__el"><a href="{{route('admin-category-create')}}" class="admin-menu__link">Добавить категорию</a></li>
        <li class="admin-menu__el"><a href="{{route('admin-emails')}}" class="admin-menu__link">Все email</a></li>
        <li class="admin-menu__el"><a href="{{route('admin-email-create')}}" class="admin-menu__link">Добавить email</a></li>
    </ul>
    @yield('content')
</div>
</body>
</html>