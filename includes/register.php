<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Software</title>
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
            <div class="row row-cols-1 row-cols-md-2 g-4 p-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <div>
                            <div class="mb-4 d-flex justify-content-start">
                                <img id="selectedImage" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                                    alt="example placeholder" style="width: 300px;" />
                            </div>
                            <div class="d-flex justify-content-start">
                                <div class="btn btn-primary btn-rounded">
                                    <label class="form-label text-white m-1" for="customFile1">Choose file</label>
                                    <input type="file" class="form-control d-none" id="customFile1"
                                        onchange="displaySelectedImage(event, 'selectedImage')" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 p-3">
                <div class="col">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label text-white">Full Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Full Name">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label text-white">Mobile Number</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Mobile Number">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label text-white">Email</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label text-white">Username</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label text-white">Password</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Password">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label text-white">Confirm Password</label>
                        <input type="text" class="form-control" id="formGroupExampleInput"
                            placeholder="Confirm Password">
                    </div>
                </div>
                <div class="col">
                    <label for="formGroupExampleInput2" class="form-label text-white">Outlet</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">Showroom One</option>
                        <option value="2">Showroom Two</option>
                        <option value="3">Showroom Three</option>
                    </select>
                </div>
                <div class="col">
                    <label for="formGroupExampleInput2" class="form-label text-white">Role Setting</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                </div>
            </div>
            <div class="container p-3">
                <button type="submit" class="btn btn-primary btn-rounded">Submit</button>
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