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
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <link rel="stylesheet" type="text/css" href="../style.css">


</head>

<body>
    <!-- sidebar start -->
    <?php
    include("../includes/sidebar.php");
    ?>
    <!-- sidebar end -->
    <!-- Main Body Start -->
    <div class="main main-bg">
        <!-- navbar start -->
        <?php
        include("../includes/navbar.php");
        ?>
        <!-- navbar end -->
        <!-- shortcut start -->
        <?php
        include("../includes/shortcut.php");
        ?>
        <!-- shortcut end -->
        <!-- Form Start -->
        <div class="container-fluid">
            <p class="text-center font-monospace fs-3 fw-bolder text-light">Customer All Transaction</p>
        </div>
        <div class="container-fluid">
            <div class="row new-row-1">
                <div class="col-md-3 pt-3">
                    <form action="">
                        <label for="exampleDataList" class="form-label fs-5 text-light fw-semibold font-monospace">
                            Select Customer</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Customer</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </form>
                </div>
                <!-- From To Calender Search Start -->
                <div class="col-md-3">
                    <div class="calendar-container">
                        <form>
                            <label for="datefrom" class="form-label  text-light fw-semibold font-monospace">From</label>
                            <input type="date" id="date" name="date">
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="calendar-container">
                        <form>
                            <label for="dateto" class="form-label  text-light fw-semibold font-monospace">To</label>
                            <input type="date" id="date" name="date">
                        </form>
                    </div>
                </div>
                <!-- From To Calender Search End -->
                <div class="col-md-3 pt-3">
                    <form action="">
                        <label for="exampleDataList" class="form-label fs-5 text-light fw-semibold font-monospace">
                            Cheque</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Search Cheque</option>
                            <option value="1">Pending</option>
                        </select>
                    </form>
                </div>
                <div class="col-md-3 pt-3">
                    <form action="">
                        <input class="form-control" type="text" value="Voucher No." aria-label="readonly input example">
                        <button type="submit" class="btn btn-light text-primary btn-outline-danger">Show</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="container-fluid pt-3">
            <div class="table-responsive">
                <table class="table table-bordered bg-light">
                    <thead>
                        <tr>
                            <th scope="col">SL NO</th>
                            <th scope="col">Date</th>
                            <th scope="col">Invoice No</th>
                            <th scope="col">C.ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Payment Method</th>
                            <th scope="col">Paid</th>
                            <th scope="col">Receive</th>
                            <th scope="col">Username</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col" class="col-sm-1"><button type="button" class="btn btn-danger"><i
                                        class="fas fa-times"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fas fa-eye"></i></button>
                            </th>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>

        </div>

        <!-- Form End -->

    </div>
    <!-- Main Body End -->
    </div>
    <!-- Wrapper End -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="../js/script.js"></script>
</body>

</html>