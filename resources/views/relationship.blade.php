<!DOCTYPE html>
<html lang="en">
<head>
<title>Relationship</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <form action="/relationship" method="POST">
  @csrf
        <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Name" name="name">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <div class="table-responsive">
                    <table id="restaurant_list" class="table table-striped table-bordered zero-configuration">
                      <thead> 
                        <tr>
                          <th>SI.No</th>
                          <th>Name</th>
                          <th>Comments</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php $i = 1;  ?>
                          @foreach($data as $d)
                          <tr>
                            <td>{{$i}}</td>
                            <td>{{$d->name}}</td>
                            @foreach($d->comments as $cmt)
                            <td>{{$cmt->comment}}</td>
                            @endforeach
                          </tr>
                          <?php $i = $i+1; ?>
                          @endforeach
                      </tbody>
                   
                    </table>
                  </div>
                </div>
</body>
</html>