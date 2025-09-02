<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Payroll Calculator</h4>
        </div>
        <div class="card-body">
            <form action="payslipcalcu.php" method="POST">
                <!-- Employee Name -->
                <div class="mb-3">
                    <label for="employee_name" class="form-label">Employee Name</label>
                    <input type="text" name="employee_name" id="employee_name" class="form-control" placeholder="Enter your full name" required>
                </div>

                <!-- Total Days Worked -->
                <div class="mb-3">
                    <label for="days_worked" class="form-label">Total Days of Work</label>
                    <input type="number" name="days_worked" id="days_worked" class="form-control" placeholder="Enter Total Days of Work" required>
                </div>

                <!-- Daily Rate -->
                <div class="mb-3">
                    <label for="daily_rate" class="form-label">Daily Rate</label>
                    <input type="number" name="daily_rate" id="daily_rate" class="form-control" placeholder="Daily Rate" required>
                </div>

                <!-- Cash Advance -->
                <div class="mb-3">
                    <label for="cash_advance" class="form-label">Cash Advance</label>
                    <input type="number" name="cash_advance" id="cash_advance" class="form-control" placeholder="Cash Advance" value="0">
                </div>

                <!-- Submit Button -->
                <div class="text-end">
                    <button type="submit" class="btn btn-success">Generate Payslip</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
