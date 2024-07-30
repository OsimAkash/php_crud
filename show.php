<?php
$id = $_GET['id'];
require "connect.php";
$sql = "SELECT * FROM `student` WHERE id = $id ";
$result = $conn->query($sql);
$student = $result->fetch_assoc();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        numberegrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <h1>  Student Informations </h1>
                <table>
                    <tr>
                        <td>Name</td>
                        <td><?php echo $student['name']; ?> </td>
                    </tr>
                    <tr>
                        <td>Roll</td>
                        <td><?php echo $student['roll']; ?></td>
                    </tr>
                    <tr>
                        <td>Reg</td>
                        <td><?php echo $student['reg']; ?></td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td><?php echo $student['dob']; ?></td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        numberegrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>

