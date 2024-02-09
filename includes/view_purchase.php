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
            <p class="text-center font-monospace fs-3 fw-bolder text-light">New Sales</p>
        </div>
        <div class="container-fluid">
            <div class="row new-row-1">
                <div class="col-md-3 pt-3">
                    <input class="form-control" type="text" value="Voucher No." aria-label="readonly input example">
                </div>
                <div class="col-md-3 pt-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select Supplier Name</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-3 pt-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select Category</option>
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
                        <button type="submit" class="btn btn-light text-primary btn-outline-danger">Save</button>
                    </div>
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
                        <th scope="col">Sale Quantity</th>
                        <th scope="col">Sales Price</th>
                        <th scope="col">Price Type</th>
                        <th scope="col">Dis.(%)</th>
                        <th scope="col">Discount</th>
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
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"><button type="button" class="btn btn-danger"><i
                                    class="fas fa-times"></i></button></th>
                    </tr>

                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
        <div class="container">
            <div class="form-group">
                <div class="col-md-offset-3 col-md-9">
                    <button type="button" class="btn btn-light text-primary btn-outline-danger">Cash Sale</button>
                    <button type="button" class="btn btn-light text-primary btn-outline-danger">Crdit Sale</button>
                </div>
            </div>
        </div>
        <!-- Form Start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 justify-content-start">
                    <form>
                        <div class="mb-3">
                            <label for="customerName"
                                class="form-label text-light fs-5 fw-semibold font-monospace">Customer Name:</label>
                            <input type="text" class="form-control" id="customerName" placeholder="Enter customer name">
                        </div>
                        <div class="mb-3">
                            <label for="mobileNo" class="form-label  text-light fs-5 fw-semibold font-monospace">Mobile
                                No:</label>
                            <input type="tel" class="form-control" id="mobileNo" placeholder="Enter mobile number">
                        </div>
                        <div class="mb-3">
                            <label for="address"
                                class="form-label  text-light fs-5 fw-semibold font-monospace">Address:</label>
                            <input type="text" class="form-control  text-light fs-5 fw-semibold font-monospace"
                                id="address" placeholder="Enter address">
                        </div>
                        <div class="mb-3">
                            <label for="description"
                                class="form-label text-light fs-5 fw-semibold font-monospace">Description:</label>
                            <textarea class="form-control" id="description" placeholder="Enter description"></textarea>
                        </div>
                    </form>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label text-light fs-5 fw-semibold font-monospace"
                            for="flexCheckDefault">
                            Customer SMS
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label text-light fs-5 fw-semibold font-monospace"
                            for="flexCheckChecked">
                            Owner SMS
                        </label>
                    </div>
                </div>
                <div class="col-lg-6 justify-content-end">
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
                                class="col-sm-6 col-form-label  text-light fs-5 fw-semibold font-monospace">Total
                                Amount:</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" placeholder="0"
                                    aria-label="Disabled input example" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="totalDiscount"
                                class="col-sm-6 col-form-label  text-light fs-5 fw-semibold font-monospace">Total
                                Discount:</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="totalDiscount"
                                    placeholder="Enter total discount">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="transportCost"
                                class="col-sm-6 col-form-label  text-light fs-5 fw-semibold font-monospace">Transport
                                Cost:</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="transportCost"
                                    placeholder="Enter transport cost">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="labourCost"
                                class="col-sm-6 col-form-label  text-light fs-5 fw-semibold font-monospace">Labour
                                Cost:</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="labourCost"
                                    placeholder="Enter labour cost">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="grandTotal"
                                class="col-sm-6 col-form-label  text-light fs-5 fw-semibold font-monospace">Grand
                                Total:</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="grandTotal"
                                    placeholder="Enter grand total" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="paid"
                                class="col-sm-6 col-form-label  text-light fs-5 fw-semibold font-monospace">Paid:</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="currentBalance" placeholder="0">
                            </div>
                            <div class="col-sm-6">
                                <select class="form-select col-sm-6" id="paid">
                                    <option value="cash">Cash</option>
                                    <option value="bKash">bKash</option>
                                    <option value="Bank">Bank</option>
                                    <option value="Nagad">Nagad</option>
                                    <option value="Rocket">Rocket</option>
                                    <option value="pos">pos</option>
                                    <!-- Add other payment options as needed -->
                                </select>
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