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
            <p class="text-center font-monospace fs-3 fw-bolder text-light">Add Return Product</p>
        </div>
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col-md-3">
                    <div class="calendar-container">
                        <form>
                            <input type="date" id="date" name="date">
                        </form>
                    </div>
                </div>
                <div class="col-md-3 pt-3">
                    <input class="form-control" type="text" value="Barcode Generator"
                        aria-label="readonly input example" readonly>
                </div>
                <div class="col-md-3 pt-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Supplier Name</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-3 pt-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select Product</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

            </div>
        </div>
        <div class="container-fluid pt-3">

            <table class="table table-bordered bg-light">
                <thead>
                    <tr>
                        <th scope="col">SL NO</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Purchase Quantity</th>
                        <th scope="col">Purchase Price</th>
                        <th scope="col">Price Type</th>
                        <th scope="col">Total</th>
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
                        <th scope="col"><button type="button" class="btn btn-danger"><i
                                    class="fas fa-times"></i></button></th>
                    </tr>

                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
        <!-- Form Start -->
        <div class="container">
            <div class="row  justify-content-end">
                <div class="col-lg-6">
                    <form>
                        <div class="row mb-3">

                            <label for="totalQuantity"
                                class="col-sm-6 col-form-label  text-light fs-5 fw-semibold font-monospace">Total
                                Quantity:</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" placeholder="0"
                                    aria-label="Disabled input example" disabled>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="totalAmount"
                                class="col-sm-6 col-form-label  text-light fs-5 fw-semibold font-monospace">Previous
                                Balance:</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" placeholder="0"
                                    aria-label="Disabled input example" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="grandTotal"
                                class="col-sm-6 col-form-label  text-light fs-5 fw-semibold font-monospace">Grand
                                Total:</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="grandTotal"
                                    placeholder="0.0&#2547;" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="currentBalance"
                                class="col-sm-6 col-form-label  text-light fs-5 fw-semibold font-monospace">Current
                                Balance:</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" placeholder="0"
                                    aria-label="Disabled input example" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <button type="submit"
                                    class="btn btn-light text-primary btn-outline-danger">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
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