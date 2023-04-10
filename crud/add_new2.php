<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname ='reg';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$checked = $_POST['checked'];


$sql = "INSERT INTO clients(name, email, gender, mail_status) 
   VALUES ( '$name', '$email', '$gender', '$checked')";
   if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>reg</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5 offset-sm-3">
    <h2>User Registration Form</h2>
    <p class="text-muted">Please fill this form and submit to add user record to the database</p>
    </div>
    <div class="container d-flex justify-content-center">
            <form action="trial2.php" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
            <div class="col">
            <label class="form-label" >Name</label>
            <input type="text" class="form-control" name="name" placeholder="Ex. Youssef" value="<?php echo $name; ?>">
    </div>
    </div>

            <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
    </div>
    </div>

    <div class="form-group mb-3 offset-sm-3">
            <label>Gender</label> &nbsp;
            <br>
            <input type="radio" class="form-check-input" name="gender" id="male" value="<?php echo $gender; ?>">
            <label for="male" class="form-input-label">Male</label> &nbsp;
            <br>
            <input type="radio" class="form-check-input" name="gender" id="female" value="<?php echo $gender; ?>">
            <label for="female" class="form-input-label">Female</label>
    </div>

    <div class="row mb-3">
            <div class="col-sm-6 offset-sm-3">
            <input type="checkbox" name="checked" value="<?php echo $checked; ?>"> Receive E-Mails From Us
            </div>
    </div>
    <div class="row mb-3">
        <div class="offset-sm-3 col-sm-3 d-grid">
        <button type="submit" class="btn btn-success" name="submit" value="add">Submit</button>
        </div>
    <div class="col-sm-3 d-grid">
        <a class="btn btn-outline-danger" href="/lab4/trial2.php" role="button">Cancel</a>
</div>
    </div>
</form>
</div>
</body>
</html>