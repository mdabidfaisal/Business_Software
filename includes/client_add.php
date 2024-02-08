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
                    <p class="form-label fs-2 fw-bolder font-monospace text-light text-center">CLIENT TYPE</p>
                    <form action="">
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="">
                        <datalist id="datalistOptions">
                            <option value="">
                            <option value="">
                            <option value="">
                            <option value="">
                            <option value="">
                        </datalist>
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
        <div class="container-fluid">
            <p class="text-center font-monospace fs-3 fw-bolder text-light">All Client Type</p>
        </div>
        <div class="container-fluid pt-3">

            <table class="table table-bordered bg-light">
                <thead>
                    <tr>
                        <th scope="col" class="col-sm-1 text-center">SL NO</th>
                        <th scope="col" class="text-center">Client</th>
                        <th scope="col" class="col-sm-1 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col" class="col-sm-1"></th>
                        <th scope="col"></th>
                        <th scope="col" class="col-sm-1"><button type="button" class="btn btn-danger"><i
                                    class="fas fa-times"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-edit"></i></button>
                        </th>
                    </tr>

                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>

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