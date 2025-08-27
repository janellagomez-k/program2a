<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Employee Payslip</h4>
        </div>
        <div class="card-body">
            <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $fullname = htmlspecialchars($_POST['employeename']);
                    $days_of_work = htmlspecialchars($_POST['days']);
                    $daily_rate = htmlspecialchars($_POST['dailyrate']);
                    $cashadvance = htmlspecialchars($_POST['cashadvance']);
            
                }
                else {
                    echo "<div class= 'alert alert-danger'> No data received."; 
                    exit(); 
                }

            ?>

       
            <p class="lead">Here are the details you submitted:</p>
           
            <ul class="list-group">
                <li class="list-group-item"><strong>Employee Name:</strong> <?=$fullname;?> </li>
                <li class="list-group-item"><strong>Total Days of Work:</strong> <?=$days_of_work;?></li>
                <li class="list-group-item"><strong>Daily Rate:</strong> <?=$daily_rate;?></li>
                <li class="list-group-item"><strong>Cash Advance:</strong> <?=$cashadvance;?></li>
            </ul>

            <div class="mt-4">
                <a href="index.php" class="btn btn-primary">Register Another Student</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>