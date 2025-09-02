<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Payslip</title>
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
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["employee_name"];
                $daysWorked = $_POST["days_worked"];
                $dailyRate = $_POST["daily_rate"];
                $cashAdvance = $_POST["cash_advance"];
                $grossPay = $daysWorked * $dailyRate;
                $sss = $grossPay * 0.015;
                $pagibig = 50;
                $tax = $grossPay * 0.02;

                $totalDeductions = $sss + $pagibig + $tax + $cashAdvance;
                $netPay = $grossPay - $totalDeductions;
            ?>
                <p><strong>Employee Name:</strong> <?php echo htmlspecialchars($name); ?></p>
                <p><strong>Total Days Worked:</strong> <?php echo $daysWorked; ?></p>
                <p><strong>Daily Rate:</strong> ₱<?php echo number_format($dailyRate, 2); ?></p>
                <p><strong>Gross Pay:</strong> ₱<?php echo number_format($grossPay, 2); ?></p>

                <h5>Deductions:</h5>
                <p>SSS (5%): ₱<?php echo number_format($sss, 2); ?></p>
                <p>Pag-IBIG (5%): ₱<?php echo number_format($pagibig, 2); ?></p>
                <p>Tax (2%): ₱<?php echo number_format($tax, 2); ?></p>
                <p>Cash Advance: ₱<?php echo number_format($cashAdvance, 2); ?></p>

                <p><strong>Total Deductions:</strong> ₱<?php echo number_format($totalDeductions, 2); ?></p>
                <p><strong>Net Pay:</strong> ₱<?php echo number_format($netPay, 2); ?></p>

                <a href="payrollcalcu.php" class="btn btn-primary mt-3">Back</a>
            <?php } else {
                echo "<p>No data received.</p>";
            } ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
