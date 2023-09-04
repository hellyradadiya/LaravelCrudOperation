<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Add Details</title>
  <style>
    .bg-light{
      border: 1px solid black;
      height: 650px;
      width: 900px;
      margin-left: 250px;
      margin-top: 60px;
      padding: 20px;
    }
    </style>
</head>

<body>

  <form class="row g-3 bg-light" method="post" action="{{url('savedata')}}" enctype="multipart/form-data">
    @csrf
    <h1 align="center">Customer Form Add Details</h1>
    <div class="col-6">
      <label for="inputAddress2" class="form-label">Firstname</label>
      <input type="text" class="form-control" id="fname" name="fname" value="{{old('fname')}}">
      <span id="NameError" style="color: red;"></span>
      @error('firstname')
        <div class="alert alert-danger" role="alert">
          {{$message}}
          </div>
      @enderror
    </div>
    <div class="col-6 ">
      <label for="inputAddress2" class="form-label">Lastname</label>
      <input type="text" class="form-control" id="lname" name="lname" value="{{old('lname')}}">
      <span id="lNameError" style="color: red;"></span>
      @error('lastname')
        <div class="alert alert-danger" role="alert">
          {{$message}}
          </div>
      @enderror
    </div>
    <div class="col-6 ">
      <label for="inputAddress2" class="form-label">Phone</label>
      <input type="text" class="form-control" id="phone" name="phone" maxlength="10" value="{{old('phone')}}" >
      <span id="phoneError" style="color: red;"></span>
      @error('phone')
        <div class="alert alert-danger" role="alert">
          {{$message}}
          </div>
      @enderror
    </div>
  
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
      <span id="emailError" style="color: red;"></span>
      @error('email')
        <div class="alert alert-danger" role="alert">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Date</label>
      <input type="date" class="form-control" id="date" name="date" value="{{old('date')}}">
      @error('dob')
        <div class="alert alert-danger" role="alert">
          {{$message}}
          </div>
      @enderror
    </div>

    <div class="col-12 mb-5">
      <button type="submit" class="btn btn-primary" name="add">Add</button>
      <a href="{{url('showdata')}}" class="btn btn-danger">Back</a>
    </div>
   
  </form>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#email").on("input", function() {
        var email = $(this).val();
        var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        if (emailRegex.test(email)) {
          $("#emailError").text("");
        } else {
          $("#emailError").text("Invalid email format");
        }
      });

      $("#phone").on("input", function() {
        var phoneNumber = $(this).val();
        var phoneRegex = /^\d{10}$/;

        if (phoneRegex.test(phoneNumber)) {
          $("#phoneError").text("");
        } else {
          $("#phoneError").text("Invalid phone number format (10 digits only)");
        }
      });


      $("#name").on("input", function() {
        var firstName = $(this).val();
        var firstNameRegex = /^[A-Za-z]+$/;

        if (firstNameRegex.test(firstName)) {
          $("#NameError").text("");
        } else {
          $("#NameError").text("Only alphabetic characters are allowed");
        }
      });

      $("#lname").on("input", function() {
        var firstName = $(this).val();
        var firstNameRegex = /^[A-Za-z]+$/;

        if (firstNameRegex.test(firstName)) {
          $("#lNameError").text("");
        } else {
          $("#lNameError").text("Only alphabetic characters are allowed");
        }
      });

    });
  </script>
</body>

</html>