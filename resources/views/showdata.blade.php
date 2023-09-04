<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Customer Show Data</title>
  </head>
  <body>
    <h1 align="center">Customer Show Data</h1>
    <div align="right">
      <a href="{{url('adddata')}}" class="btn btn-success">Add Customer</a>
      
    </div>
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Phone No.</th>
      <th scope="col">Email</th>
      <th scope="col">DOB</th>
      <th scope="col" colspan="3">Actions</th>
    </tr>
  </thead>
  <tbody>
    @php 
         $i=1;
    @endphp
    @foreach($data as $val)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$val->firstname}}</td>
      <td>{{$val->lastname}}</td>
      <td>{{$val->phone}}</td>
      <td>{{$val->email}}</td>
      <td>{{$val->dob}}</td>
      <td><a href="{{url('editdata/'.$val->id)}}" class="btn btn-primary">Update</a></td>
      <td><a href="{{url('deletedata/'.$val->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
    </tr>
   @endforeach
  </tbody>
</table>
  </body>
</html>
