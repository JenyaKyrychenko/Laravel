<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="content" style="width: 40%; padding: 50px">

    <h2>Add New Page</h2>
    <hr>
    <div style="display: flex">
        <form action="{{route('create-admin')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="url">url</label>
                <input type="text" name="url" placeholder="Enter url" id="url" class="form-control">
            </div>
            <div class="form-group">
                <label for="caption">caption</label>
                <input type="text" name="caption" placeholder="Enter caption" id="caption" class="form-control">
            </div>
            <div class="form-group">
                <label for="intro">intro</label>
                <input type="text" name="intro" placeholder="Enter intro" id="intro" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">content</label>
                <input type="text" name="content" placeholder="Enter content" id="content" class="form-control">
            </div>
            <button type="submit" class="btn-success">Add</button>
        </form>
    </div>
    <hr>
    <h2>Pages List</h2>
    <div>
    <menu>
        @foreach($pages as $p)
                <form action="http://homestead.test/delete/{{$p->id}}">
                <button>delete</button>
                    <a href="http://homestead.test/update/{{$p->id}}">{{$p->caption}}</a>
                </form>
            <br>

            @endforeach
    </menu>
    </div>
</div>
</body>
</html>