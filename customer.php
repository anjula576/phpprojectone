<?php
//  like this can include any file
include 'mysql_connection.php';

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
                    <input type="text" class="form-control" id="nic">
                </div>
            </div>
            <div class="row col-3">
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address">
                </div>
            </div>
            <div class="row col-3">
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" class="form-control" id="contact">
                </div>
            </div>
            <div class="row col-3">
                <div class="form-group">
                    <label for="salary">Salary</label>
                    <input type="number" class="form-control" id="salary">
                </div>
            </div>
            <button class="btn btn-success">Save Customer</button>

        </div>
    </form>
</body>

</html>