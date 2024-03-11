<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Custom Unit Converter</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      padding: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Custom Unit Converter</h1>
    <form id="unitForm">
      <div class="form-group">
        <label for="unitName">Unit Name:</label>
        <input type="text" class="form-control" id="unitName" required>
      </div>
      <div class="form-group">
        <label for="unitLabel">Unit Label:</label>
        <input type="text" class="form-control" id="unitLabel" required>
      </div>
      <div class="form-group">
        <label for="unitRelation">Unit Relation (e.g., 1 ton = 1000 kg):</label>
        <input type="text" class="form-control" id="unitRelation" required>
      </div>
      <button type="submit" class="btn btn-primary">Create Unit</button>
    </form>
    <hr>
    <h2>Conversion</h2>
    <div class="form-group">
      <label for="fromUnit">From:</label>
      <input type="text" class="form-control" id="fromUnit" required>
    </div>
    <div class="form-group">
      <label for="toUnit">To:</label>
      <input type="text" class="form-control" id="toUnit" required>
    </div>
    <button type="button" class="btn btn-primary" id="convertBtn">Convert</button>
    <div id="result"></div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#unitForm').submit(function(e) {
        e.preventDefault();
        let unitName = $('#unitName').val();
        let unitLabel = $('#unitLabel').val();
        let unitRelation = $('#unitRelation').val();

        // Send the unit data to the server to store in the database
        $.ajax({
          url: 'save_unit.php',
          method: 'POST',
          data: {
            unitName: unitName,
            unitLabel: unitLabel,
            unitRelation: unitRelation
          },
          success: function(response) {
            alert(response);
            $('#unitForm')[0].reset();
          },
          error: function(xhr, status, error) {
            console.error(error);
            alert('Error saving unit. Please try again.');
          }
        });
      });

      $('#convertBtn').click(function() {
        let fromUnit = $('#fromUnit').val();
        let toUnit = $('#toUnit').val();

        // Perform the conversion calculation here
        // For simplicity, let's assume direct conversion without any complex calculation
        let result = `${fromUnit} is converted to ${toUnit}`;

        $('#result').text(result);
      });
    });
  </script>
</body>
</html>
