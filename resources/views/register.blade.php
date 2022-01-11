<!DOCTYPE html>
<html lang="en">
<head>
<title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <form action="/store" method="POST">
  @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
    </div>
    <div class="form-group">
      <label for="name">Email</label>
      <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
    </div>
    <div class="form-group">
      <label for="name">Password</label>
      <input type="password" class="form-control" id="Password" placeholder="Password" name="password" required>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>

  <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <div class="table-responsive">
                    <table id="restaurant_list" class="table table-striped table-bordered zero-configuration">
                      <thead> 
                        <tr>
                          <th>SI.No</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Intime</th>
                          <th>Action</th>

                        </tr>
                      </thead>
                      <tbody>
                         <?php $i = 1;  ?>
                          @foreach($getUser as $d)
                          <tr>
                            <td>{{$i}}</td>
                            <td>{{$d->name}}</td>
                            <td>{{$d->email}}</td>
                            <td>{{$d->in_time}}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit-modal-{{$d->id}}">Update</button>                                
                                <a href="/user-delete/{{$d->id}}" class="btn btn-danger" >Delete</a>
                            </td>

                 <div class="modal fade" id="edit-modal-{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form action="/user-update" method="POST">     
                             @csrf
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Users</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">

                                    <div class="col-md-6" style="padding-top: 1%;">
                                        <input type="hidden" name="id" value="{{$d->id}}">
                                        <input type="text" class="form-control " placeholder="Name" aria-label="Name" name="name" requried value="{{$d->name}}">
                                    </div> 

                                    <div class="col-md-6" style="padding-top: 1%;">
                                        <input type="text" class="form-control" placeholder="Email" aria-label="Email" name="email" requried value="{{$d->email}}">
                                    </div>

                                    {{-- <div class="col" style="padding-top: 1%;">
                                    <button type="submit" class="btn btn-primary" value="update">update</button>                 
                                    </div> --}}
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                        </div>
                        </div>
                    </div>

                          </tr>
                          <?php $i = $i+1; ?>
                          @endforeach
                      </tbody>
                   
                    </table>
                  </div>
                </div>
</div>
</body>
</html>