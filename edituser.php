<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <title>Edit User</title>
</head>
<body>
    
<div class="container">
    <div class="col-md-7">
        <div class="card mt-4">
            <div class="card-body">
                <h1 class="text-center">Edit User</h1>
                <form autocomplete="off" action="" id="myform"  enctype="multipart/form-data">
                    <?php
                    require 'config.php';
                    $id = $_GET['id'];
                    $rows = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM users WHERE id = $id"));
                    ?>
                    <input type="hidden" id="id" value="<?php echo $rows['id'];?>">
  <div class="form-floating">
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $rows['name'];?>" placeholder="Name" pattern="[a-zA-Z]{5,}" title="Minimum 5 letters" required="">
    <label>Name</label>
    <span id="uname" style="color:red"></span>
  </div><br>
  
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="email" name="email" id="umail" value="<?php echo $rows['email'];?>" placeholder="name@example.com">
  <label for="umail">Email address</label>
</div>

  <div class="form-check">
    <label>Gender</label>
    <div class="maleRadio">
    <input type="radio" id="gender" name="gender"  value="Male" <?php if($rows['gender'] == "Male") echo "selected";?> />
    <label>Male</label>
  </div>
  <div class="maleRadio">
    <input type="radio" id="gender" name="gender"  value="FeMale" <?php if($rows['gender'] == "FeMale") echo "selected";?>/>
    <label>Female</label>
  </div>
  </div><br>
  <button type="button" onclick="submitData('edit');">Edit</button>

</form>
<br>

<a href="index.php">Go to index</a>
<?php require 'script.php'; ?>
    </body>
</html>