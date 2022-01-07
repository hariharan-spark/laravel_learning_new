<!DOCTYPE html>
<html lang="en">
<head>
<title>Comments</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <form action="/comments" method="POST">
  @csrf
    <div class="form-group">
      <label for="name">Comment</label>
      <input type="text" class="form-control" id="comment" placeholder="Comment" name="comment">
    </div>
    <div class="form-group">
        @foreach($data as $d)
      <input type="hidden" class="form-control"  name="post_id" value="{{$d->id}}">
        @endforeach
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</body>
</html>