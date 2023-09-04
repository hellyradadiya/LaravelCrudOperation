
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Update Details</title>
  <style>
    .bg-light{
      border: 1px solid black;
      height: 450px;
      width: 900px;
      margin-left: 250px;
      margin-top: 60px;
      padding: 20px;
    }
    </style>
</head>

<body>
  <form class="row g-3 bg-light" method="post" action="{{url('updatedata/'.$data->id)}}" enctype="multipart/form-data">
    @csrf
    <h1 align="center">Customer Form Update Details</h1>
    <input type="hidden" name="id" value="{{$data->id}}">
    <div class="col-6">
      <label for="inputAddress2" class="form-label">Firstname</label>
      <input type="text" class="form-control" id="fname" name="fname" value="{{$data->firstname}}">
      @error('firstname')
        <div class="alert alert-danger" role="alert">
          {{$message}}
        </div>
      @enderror
    </div>
    <div class="col-6 ">
      <label for="inputAddress2" class="form-label">Lastname</label>
      <input type="text" class="form-control" id="lname" name="lname" value="{{$data->lastname}}">
      @error('lastname')
        <div class="alert alert-danger" role="alert">
          {{$message}}
        </div>
      @enderror
    </div>
    <div class="col-6 ">
      <label for="inputAddress2" class="form-label">Phone</label>
      <input type="text" class="form-control" id="phone" name="phone" value="{{$data->phone}}" maxlength="10" >
      @error('phone')
        <div class="alert alert-danger" role="alert">
          {{$message}}
        </div>
      @enderror
    </div>
  
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{$data->email}}" >
      @error('email')
        <div class="alert alert-danger" role="alert">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Date</label>
      <input type="date" class="form-control" id="date" name="date" value="{{$data->dob}}" >
      @error('date')
        <div class="alert alert-danger" role="alert">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="col-12 mb-5">
      <button type="submit" class="btn btn-primary" name="update">Update</button>
    </div>
   
  </form>
</body>

</html>