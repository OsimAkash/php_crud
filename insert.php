
<?php
require "connect.php";

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
                <h1> Add New Student </h1>


                <form action="store.php" method="post">
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control"  name="name" id="name" placeholder="Enter Name" >
                    </div>
                    <div class="form-group">
                        <label for="roll" class="form-label">Roll</label>
                        <input type="number" class="form-control" name="roll" id="roll" placeholder="Enter Roll" >
                    </div>
                    <div class="form-group">
                        <label for="reg" class="form-label">Reg</label>
                        <input type="number" class="form-control" name="reg" id="reg" placeholder="Enter Reg" >
                    </div>
                    <div class="form-group">
                        <label for="dob" class="form-label">Death of Birth</label>
                        <input type="date" class="form-control" name="dob" id="dob" placeholder="Enter Birth Date" >
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        numberegrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>