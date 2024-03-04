<?php
include "db_conn.php";

if(isset($_POST['submit'])){
    $first_name =$_POST['first_name'];
    $laste_name =$_POST['laste_name'];
    $email =$_POST['email'];
    $gender =$_POST['gender'];

$sql ="INSERT INTO `crud`(`id`, `first_name`, `laste_name`, `email`, `gender`)
 VALUES (NULL,'$first_name','$laste_name','$email','$gender')";

$result = mysqli_query($conn, $sql);
if($result){
    header("Location: index.php?msg=New record created successfully");

}
else{
    echo"Failed:" . mysqli_error($conn);
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP CRUD Application</title>
</head>
<body>
    
<nav class="navbar navbar-light justify-content-center fs-3 mb-5"style="background-color:#00ff5573;">
    PHP Complete CRUD Application
</nav>


<div class="container">
    <div class="text-center mb-4">
        <h3>Add New User</h3>
        <p class="text-muted">Complete the form below to add a new user</p>
    </div>

    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">First Name:</label>
                <input type="text" class="form-control" name="first_name" placeholder="Cheikh" >
            </div>
            <div class="col">
                <label class="form-label">Laste Name:</label>
                <input type="text" class="form-control" name="laste_name" placeholder="Sané" >
            </div>
        </div>
        <div>

        <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="text" class="form-control" name="email" placeholder="name@exemple.com" >
            </div>
        </div>

        <div class="form-group mb-3">
            <label>Gender:</label>&nbsp;
            <input type="radio" class="form-check-input" name="gender"id="male" value="male">
            <label for="male" class="form-input-label">Male</label>
            &nbsp;
            <input type="radio" class="form-check-input" name="gender"id="female" value="female">
            <label for="female" class="form-input-label">Female</label>
        </div>
        <div>
            <button type="submit" class="btn btn-success" name="submit">Save</button>
            <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
    </form>
    </div>
</div>



<!-- Bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>