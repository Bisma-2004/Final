<div>
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
            <th>Hobby</th>
            <th>Country</th>
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
                <td><?php echo $row["Hobby"]; ?></td>
                <td><?php echo $row["Country"]; ?></td>
                <td><a href="delete.php?id=<?php echo $row["ID"];?>" class="btn btn-danger">Delete</a></td>
                <td><a href="update.php?id=<?php echo $row["ID"];?>" class="btn btn-warning">Update</a></td>
            </tr>
            <?php  } ?>
        </tbody>
    </table>
</div>
<?php } ?>

                    </div>
                   
                    
