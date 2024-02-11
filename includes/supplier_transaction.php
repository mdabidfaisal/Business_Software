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
                    <p class="form-label fs-2 fw-bolder font-monospace text-light text-center">ADD TRANSACTION</p>
                    <form action="">
                        <div class="calendar-container">
                            <form>
                                <input type="date" id="date" name="date">
                            </form>
                        </div>
                        <label for="exampleDataList"
                            class="form-label fs-6 fw-bolder font-monospace text-light">Supplier Name
                        </label>
                        <select class="form-select col-sm-6 text-center font-monospace fw-bold text-primary" id="paid">
                            <option value="cash" class="text-center font-monospace fw-bold">ABC</option>
                            <option value="bKash" class="text-center font-monospace fw-bold">DEF</option>
                        </select>
                        <label for="exampleDataList" class="form-label fs-6 fw-bolder font-monospace text-light">
                            Balance(TK)</label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="0.00&#2547"
                            readonly>
                            <select class="form-select col-sm-6 text-center font-monospace fw-bold text-primary" id="paid">
                            <option value="cash" class="text-center font-monospace fw-bold">Payable</option>
                            <option value="bKash" class="text-center font-monospace fw-bold">Receivable</option>
                        </select>
                        <label for="exampleDataList"
                            class="form-label fs-6 fw-bolder font-monospace text-light">Customer
                            Name</label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList"
                            placeholder="Type to search..." required>
                        <datalist id="datalistOptions">
                            <option value="">
                            <option value="">
                            <option value="">
                            <option value="">
                            <option value="">
                        </datalist>
                        <label for="exampleDataList"
                            class="form-label fs-6 fw-bolder font-monospace text-light">Father's/Proprietor
                            Name</label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList"
                            placeholder="Type to search..." required>
                        <datalist id="datalistOptions">
                            <option value="">
                            <option value="">
                            <option value="">
                            <option value="">
                            <option value="">
                        </datalist>
                        <label for="exampleDataList"
                            class="form-label fs-6 fw-bolder font-monospace text-light">Mobile</label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="" required>
                        <datalist id="datalistOptions">
                            <option value="">
                            <option value="">
                            <option value="">
                            <option value="">
                            <option value="">
                        </datalist>
                        <label for="exampleDataList"
                            class="form-label fs-6 fw-bolder font-monospace text-light">Address</label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="">
                        <label for="exampleDataList" class="form-label fs-6 fw-bolder font-monospace text-light">ID Card
                            No.</label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="">
                        <label for="exampleDataList" class="form-label fs-6 fw-bolder font-monospace text-light">Initial
                            Balance(TK)</label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="0.00&#2547"
                            required>
                        <div class="form-group fs-6 fw-bolder font-monospace text-light">
                            <label for="bankOption">Choose Bank Option:</label>
                            <select class="form-select" id="bankOption">
                                <option value="">Select</option>
                                <option value="bank">Bank</option>
                                <!-- Add other options here if needed -->
                            </select>
                        </div>
                        <div id="extraOptions" style="display: none;">
                            <div class="form-group fs-6 fw-bolder font-monospace text-light">
                                <label for="bankOption">Bank Name</label>
                                <select class="form-select" id="bankOption">
                                    <option value="">Select</option>
                                    <option value="bank">IBBL</option>
                                    <!-- Add other options here if needed -->
                                </select>
                            </div>
                            <div class="form-group fs-6 fw-bolder font-monospace text-light">
                                <label for="bankOption">Account No</label>
                                <select class="form-select" id="bankOption">
                                    <option value="">Select</option>
                                    <option value="bank">1</option>
                                    <!-- Add other options here if needed -->
                                </select>
                                <div class="form-group">
                                    <label for="bankName">Branch name :</label>
                                    <input type="text" class="form-control" id="branchName" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="accountNumber">Account Holder Name</label>
                                    <input type="text" class="form-control" id="accountHolder" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="accountNumber">Bank Balance</label>
                                    <input type="text" class="form-control" id="BankBalance" readonly>
                                </div>
                            </div>
                            <!-- Add other extra options here if needed -->
                        </div>
                        <select class="form-select col-sm-6 text-center font-monospace fw-bold text-primary" id="paid">
                            <option value="cash" class="text-center font-monospace fw-bold">Payable</option>
                            <option value="bKash" class="text-center font-monospace fw-bold">Receivable</option>
                        </select>

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
    <script>
    // JavaScript code to handle option selection
    const bankOption = document.getElementById('bankOption');
    const extraOptions = document.getElementById('extraOptions');

    bankOption.addEventListener('change', function() {
        if (this.value === 'bank') {
            extraOptions.style.display = 'block';
        } else {
            extraOptions.style.display = 'none';
        }
    });
    </script>
</body>

</html>