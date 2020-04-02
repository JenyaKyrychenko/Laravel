<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data</title>
    <link rel="stylesheet" href="{{asset('/css/user.css')}}">
</head>
<body>
<div>

        @foreach($users as $d)
               <p><strong>{{$d->name}}  {{$d->second_name}}</strong></p>
                @foreach($d->posts as $p)
                    <menu>
                        <li>{{$p->message}} </li>
                    </menu>

                @endforeach
        @endforeach


</div>

<p>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</p>

<div>
    @foreach($data as $d)
        <p><strong>{{$d->name}}</strong></p>
            <menu>
                <li>{{$d->user->name}} </li>
            </menu>
    @endforeach
</div>
</body>
</html>