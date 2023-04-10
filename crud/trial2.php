<?php
require_once('db.php');
$query = "select * from clients";
$result = mysqli_query($conn,$query);
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
    <tbody>
<div class="container my-5">
    <h1>User Details</h1>
    <a class="btn btn-primary" style=" float:right" href="/lab4/add_new2.php" role="button">Add New User</a>
    <br>
    <table class="table table-bordered text-centered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Mail Status</th>
                <th>Action</th>
            </tr>
            <tr>
            <?php
                
                while($row = mysqli_fetch_assoc($result))
                {
            ?>
                <td><?php echo $row['#']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['checked']; ?></td>
                <td>
                    <a class='btn btn-info btn-sm' href='/lab4/show.php?id=$row[Action]'>View</a>
                    <a class='btn btn-primary btn-sm' href='/lab4/edit.php?id=$row[Action]'>Edit</a>
                    <a class='btn btn-danger btn-sm' href='/lab4/delete.php?id=$row[Action]'>Delete</a>
                </td>
            </tr>
            <?php
                }
            ?>
            
        </thead>
</tbody>
            