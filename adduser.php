<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <title>Add User</title>
</head>
<body>
    
<div class="container">
    <div class="col-md-7">
        <div class="card mt-4">
            <div class="card-body">
                <h1 class="text-center"> Add User</h1>
                <form autocomplete="off" action="" id="myform"  enctype="multipart/form-data">
  <div class="form-floating">
    <input type="text" class="form-control" id="name" name="name" placeholder="Name" pattern="[a-zA-Z]{5,}" title="Minimum 5 letters" required="">
    <label>Name</label>
    <span id="uname" style="color:red"></span>
  </div><br>
  
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="email" name="email" id="umail" value="" placeholder="name@example.com">
  <label for="umail">Email address</label>
</div>

  <div class="form-check">
    <label>Gender</label>
    <div class="maleRadio">
    <input type="radio" id="gender" name="gender"  value="Male" />
    <label>Male</label>
  </div>
  <div class="maleRadio">
    <input type="radio" id="gender" name="gender"  value="FeMale" />
    <label>Female</label>
  </div>
  </div><br>
  <button type="button" onclick="submitData('insert');">Insert</button>
</form>
<br>

<a href="index.php">Go to index</a>
<?php require 'script.php'; ?>
    </body>
</html>