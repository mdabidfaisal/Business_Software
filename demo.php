<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap 5 Auto Search</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Optional CSS styles for results display */
    #searchResults {
      position: absolute;
      background-color: white;
      border: 1px solid #ced4da;
      max-height: 200px;
      overflow-y: auto;
      z-index: 1000;
    }
    .result-item {
      padding: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="searchInput">
          <!-- No need for the submit button in auto search -->
        </form>
        <div id="searchResults"></div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (Optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Simulated list of options for auto-search
    const options = ['Apple', 'Banana', 'Cherry', 'Date', 'Grape', 'Lemon', 'Mango', 'Orange', 'Peach', 'Pear', 'Pineapple'];

    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');

    searchInput.addEventListener('input', function() {
      const query = this.value.toLowerCase();
      let resultsHtml = '';

      options.forEach(option => {
        if (option.toLowerCase().startsWith(query)) {
          resultsHtml += `<div class="result-item">${option}</div>`;
        }
      });

      searchResults.innerHTML = resultsHtml;

      // Optional: Add event listener to handle clicks on results
      const resultItems = document.querySelectorAll('.result-item');
      resultItems.forEach(item => {
        item.addEventListener('click', function() {
          searchInput.value = this.innerText;
          searchResults.innerHTML = ''; // Clear results after selection
        });
      });
    });
  </script>
</body>
</html>
