@include('includes.updatesPage')

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>

<div style="width: 150px; margin: 50px;">
<a href="http://homestead.test/admin"><--- to Admin Panel</a>
</div>

<div class="content" style="padding: 50px">
    @foreach($data as $d)
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">url <a href="http://homestead.test/update/{{$d->id}}/url">Edit</a></th>
                <th scope="col">caption <a href="http://homestead.test/update/{{$d->id}}/caption">Edit</a> </th>
                <th scope="col">intro <a href="http://homestead.test/update/{{$d->id}}/intro">Edit</a> </th>
                <th scope="col">content <a href="http://homestead.test/update/{{$d->id}}/content">Edit</a> </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{$d->id}}</th>
                <td>{{$d->url}}</td>
                <td>{{$d->caption}}</td>
                <td>{{$d->intro}}</td>
                <td>{{$d->content}}</td>
            </tr>
            </tbody>
        </table>
    @endforeach
@if($editParam == 'url')
    @yield('url')
    @elseif($editParam == 'caption')
            @yield('caption')
        @elseif($editParam == 'intro')
                @yield('intro')
            @elseif($editParam == 'content')
                @yield('content')
    @endif
</div>

</body>
</html>