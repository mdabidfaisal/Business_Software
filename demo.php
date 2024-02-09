<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Date-wise Search Calendar</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Datepicker CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <label for="fromDate" class="form-label">From Date</label>
        <input type="text" class="form-control" id="fromDate">
      </div>
      <div class="col">
        <label for="toDate" class="form-label">To Date</label>
        <input type="text" class="form-control" id="toDate">
      </div>
    </div>
    <div class="row mt-3">
      <div class="col">
        <button class="btn btn-primary" id="searchBtn">Search</button>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col">
        <div id="calendar"></div>
      </div>
    </div>
  </div>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  <!-- Bootstrap Datepicker JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Initialize datepicker for from and to date
      $('#fromDate, #toDate').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
      });

      // Initialize the calendar
      $('#calendar').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true
      });

      // Add event listener to search button
      document.getElementById('searchBtn').addEventListener('click', function () {
        var fromDate = document.getElementById('fromDate').value;
        var toDate = document.getElementById('toDate').value;

        // Perform search operation here using fromDate and toDate
        alert('Searching events from ' + fromDate + ' to ' + toDate);
      });
    });
  </script>
</body>
</html>
