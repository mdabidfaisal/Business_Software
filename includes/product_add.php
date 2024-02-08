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
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 p-3 justify-content-center">
                <div class="col-md-4">
                    <p class="form-label fs-2 fw-bolder font-monospace text-light text-center">ADD PRODUCT</p>
                    <form action="">
                        <label for="exampleDataList" class="form-label fs-6 fw-bolder font-monospace text-light">Product
                            Name</label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="" required>
                        <datalist id="datalistOptions">
                            <option value="">
                            <option value="">
                            <option value="">
                            <option value="">
                            <option value="">
                        </datalist>
                        <label for="exampleDataList"
                            class="form-label fs-6 fw-bolder font-monospace text-light">Category</label>
                        <select class="form-select col-sm-6 text-center font-monospace fw-bold text-primary"
                            id="category1">
                            <option value="1" class="text-center font-monospace fw-bold">Category1</option>
                            <option value="2" class="text-center font-monospace fw-bold">Category2</option>
                        </select>
                        <label for="exampleDataList"
                            class="form-label fs-6 fw-bolder font-monospace text-light">SubCategory</label>
                        <select class="form-select col-sm-6 text-center font-monospace fw-bold text-primary"
                            id="category2">
                            <option value="1" class="text-center font-monospace fw-bold">SubCategory1</option>
                            <option value="2" class="text-center font-monospace fw-bold">SubCategory2</option>
                        </select>
                        <label for="exampleDataList"
                            class="form-label fs-6 fw-bolder font-monospace text-light">Brand</label>
                        <select class="form-select col-sm-6 text-center font-monospace fw-bold text-primary"
                            id="category3">
                            <option value="1" class="text-center font-monospace fw-bold">Brand1</option>
                            <option value="2" class="text-center font-monospace fw-bold">Brand2</option>
                        </select>
                        <label for="paid1"
                            class="col-sm-6 col-form-label  text-light fs-5 fw-semibold font-monospace">Purchase
                            Price</label>
                        <input type="number" class="form-control" id="currentBalance" placeholder="0">
                        <label for="paid2"
                            class="col-sm-6 col-form-label  text-light fs-5 fw-semibold font-monospace">Sell
                            Price</label>
                        <input type="number" class="form-control" id="currentBalance" placeholder="0">
                        <label for="paid2"
                            class="col-sm-6 col-form-label  text-light fs-5 fw-semibold font-monospace">Unit</label>
                        <select class="form-select col-sm-6 text-center font-monospace fw-bold text-primary" id="unit">
                            <option value="unit1" class="text-center font-monospace fw-bold">1</option>
                            <option value="unit2" class="text-center font-monospace fw-bold">2</option>
                        </select>
                        <div class="form-check form-switch pt-3">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                                checked>
                            <label class="form-check-label text-light fs-5 fw-semibold font-monospace"
                                for="flexSwitchCheckChecked">Product Status</label>
                        </div>
                        <div class="row row-cols-1 row-cols-md-3 g-4 p-4 justify-content-end">
                            <div class="col-md-4 text-center">
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