<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<section style="padding-top:60px;">
<div class="container">
<div class="row">
<div class="col-md-9 offset-2">
<div class="row">
<div class="card">
  <div class="card-header text-center bg-dark text-light">
   All Posts <a href="/addPost" class="btn btn-warning" style="float: right;">Add Post</a>
  </div>
    <div class="card-body bg-secondary">
    @if(Session::has('postdelete'))
            <div class="alert alert-success" role="alert">
            {{Session::get('postdelete')}}
            </div>
        
         @endif
    <table class=" table table-striped table-warning">
    <thead>
    <tr>
    <th>ID</th>
    <th>Tittle</th>
    <th>Description</th>
    <th>Actions</th>
    </tr>
    
    </thead>
    <tbody>
    @foreach($posts as $post)
    <tr>
    <td>{{$post->id}}</td>
    <td>{{$post->title}}</td>
    <td>{{$post->body}}</td>
    <td><a href="/singlepost/{{$post->id}}" class="btn btn-primary">Details</a>
    <a href="/deletepost/{{$post->id}}" class="btn btn-danger">Delete</a>
    <a href="/editpost/{{$post->id}}" class="btn btn-success">Edit</a>
    </td>
    </tr>
    @endforeach
    </tbody>
    
    </table>
    </div>

    </div>
</div>


</div>


</div>

</div>

</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>
