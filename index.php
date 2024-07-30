<?php

require "connect.php";
$sql = "SELECT * FROM `student`";
$result = $conn->query($sql);



session_start();



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <?php if(isset($_SESSION['msg'])) { ?>
                <br> 

                <div class="alert alert-success" role="alert">
                    <?php echo $_SESSION['msg'];    ?>

                </div>
                <?php session_destroy(); 
                 } ?>
                <h1>Student List</h1>

                <a href="insert.php" class="btn btn-primary"> Add New Student </a>
                <br>
                <br>
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Reg</th>
                            <th>Date of Birth</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) {  ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['roll']; ?></td>
                            <td><?php echo $row['reg']; ?></td>
                            <td><?php echo $row['dob']; ?></td>
                            <td>
                                <a href="show.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">View </a>
                            </td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit </a>
                            </td>
                            <td>
                                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete </a>
                            </td>

                        </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>