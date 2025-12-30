<?php

//  like this can include any file
include 'mysql_connection.php';

if (isset($_POST['submit'])) {

    $nic = $_POST['nic'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <form>
        <div class="container">
            <h4>Customer Form</h4>
            <hr>
            <div class="row col-3">
                <div class="form-group">
                    <label for="nic">NIC</label>
                    <input type="text" name="nic" class="form-control" id="nic">
                </div>
            </div>
            <div class="row col-3">
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" id="address">
                </div>
            </div>
            <div class="row col-3">
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
            </div>
            <div class="row col-3">
                <div class="form-group">
                    <label for="salary">Salary</label>
                    <input type="number" name="salary" class="form-control" id="salary">
                </div>
            </div>
            <button class="btn btn-success">Save Customer</button>

        </div>
    </form>
</body>

</html>