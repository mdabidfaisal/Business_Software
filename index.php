<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Software</title>
    <link rel="icon" href="../images/1.png" type="image/png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    
</head>

<body>
    <!-- sidebar start -->
    <?php
    include("includes/sidebar.php");
    ?>
    <!-- sidebar end -->
    <!-- Main Body Start -->
    <div class="main main-bg">
        <!-- navbar start -->
        <?php
    include("includes/navbar.php");
    ?>
        <!-- navbar end -->
        <!-- shortcut start -->
        <?php
    include("includes/shortcut.php");
    ?>
        <!-- shortcut end -->
        <!-- Dash Box Start -->
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card">
                        <button class="btn dash-box btn-outline-primary">
                            <h5 class="card-title font-monospace fw-bold fs-3">Purchase Amount</h5>
                            <p class="card-text font-monospace fw-bold fs-3">0&#2547</p>
                        </button>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <button class="btn dash-box btn-outline-primary">
                            <h5 class="card-title font-monospace fw-bold fs-3">Sales Amount</h5>
                            <p class="card-text font-monospace fw-bold fs-3">0&#2547</p>
                        </button>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <button class="btn dash-box btn-outline-primary">
                            <h5 class="card-title font-monospace fw-bold fs-3">Customer Due</h5>
                            <p class="card-text font-monospace fw-bold fs-3">0&#2547</p>
                        </button>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <button class="btn dash-box btn-outline-primary">
                            <h5 class="card-title font-monospace fw-bold fs-3">Invoice Receive</h5>
                            <p class="card-text font-monospace fw-bold fs-3">0&#2547</p>
                        </button>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <button class="btn dash-box btn-outline-primary">
                            <h5 class="card-title font-monospace fw-bold fs-3">Supplier Payment</h5>
                            <p class="card-text font-monospace fw-bold fs-3">0&#2547</p>
                        </button>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <button class="btn dash-box btn-outline-primary">
                            <h5 class="card-title font-monospace fw-bold fs-3">Bank Debit</h5>
                            <p class="card-text font-monospace fw-bold fs-3">0&#2547</p>
                        </button>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <button class="btn dash-box btn-outline-primary">
                            <h5 class="card-title font-monospace fw-bold fs-3">Payment Receive</h5>
                            <p class="card-text font-monospace fw-bold fs-3">0&#2547</p>
                        </button>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <button class="btn dash-box btn-outline-primary">
                            <h5 class="card-title font-monospace fw-bold fs-3">Bank Credit</h5>
                            <p class="card-text font-monospace fw-bold fs-3">0&#2547</p>
                        </button>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <button class="btn dash-box btn-outline-primary">
                            <h5 class="card-title font-monospace fw-bold fs-3">Expenditure</h5>
                            <p class="card-text font-monospace fw-bold fs-3">0&#2547</p>
                        </button>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <button class="btn dash-box btn-outline-primary">
                            <h5 class="card-title font-monospace fw-bold fs-3">Earning</h5>
                            <p class="card-text font-monospace fw-bold fs-3">0&#2547</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dash Box End -->
    </div>
    <!-- Main Body End -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
</body>

</html>