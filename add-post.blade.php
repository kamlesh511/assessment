<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add post title </title>
</head>
<body>
    <section style="padding-top:60px">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card-header">
                    Add Post 
                </div>
                <div class="card-body">
                    @if(Session::has('post_created'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('post_created')}}
                    </div>
                    @endif
                    <form method="post" action="{{route('post.create')}}">
                        @csrf
                        <div class="form-group">
                            <label for="post"> Add post</label>
                            <input type="text" name="post" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="post"> post description </label>
                            <textarea  name="body" rows="3" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">add post</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>