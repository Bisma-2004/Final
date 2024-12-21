<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
<?php 
require("connect.php");
$select ="SELECT * FROM `form`";
$info = mysqli_query($connect,$select);
if(mysqli_num_rows($info)){
?>
<div class="container-fluid">
    <table class="table table-dark table-striped">
        <thead>
            <th>ID</th>
            <th>Name </th>
            <th>Father Name</th>
            <th>Address</th>
            <th>Domicile</th>
            <th>Religion</th>
            <th>Email</th>
            <th>Trade</th>
            <th>Image</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($info)){  ?>
            <tr>
                <td><?php echo $row["ID"]; ?></td>
                <td><?php echo $row["Name"]; ?></td>
                <td><?php echo $row["Fname"]; ?></td>
                <td><?php echo $row["Address"]; ?></td>
                <td><?php echo $row["Domicile"]; ?></td>
                <td><?php echo $row["Religion"]; ?></td>
                <td><?php echo $row["Email"]; ?></td>
                <td><?php echo $row["Trade"]; ?></td>
                <td><img src="<?php echo $row["Image"]; ?>" width="150px" height="150px" alt=""></td>
                <td><a href="delete.php?id=<?php echo $row["ID"];?>" class="btn btn-danger">Delete</a>
                <a href="update.php?id=<?php echo $row["ID"];?>" class="btn btn-warning">Update</a></td>
            </tr>
            <?php  } ?>
        </tbody>
    </table>
</div>
<?php } ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>