<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Software</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .dash-box {

            background: rgb(34, 193, 195);
            background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%);
            color: black;
        }

        .main-bg {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
        }

        .shortcut-bg {
            background: rgb(63, 94, 251);
            background: linear-gradient(90deg, #3F2B96 0%, #A8C0FF 100%);
            color: black;
        }

        .navbar-bg {
            background: rgb(63, 94, 251);
            background: linear-gradient(90deg, #3F2B96 0%, #A8C0FF 100%);
            color: white;
        }
    </style>

</head>

<body>
    <!-- Wrapper Start -->
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Business Software</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <!-- Category Start -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#cate" aria-expanded="false" aria-controls="cate">
                        <i class="lni lni-list"></i>
                        <span>Category</span>
                    </a>
                    <ul id="cate" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Add New</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">View All</a>
                        </li>
                    </ul>
                </li>
                <!-- Category End -->
                <!-- Subcategory Start -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#subc" aria-expanded="false" aria-controls="subc">
                        <i class="lni lni-list"></i>
                        <span>Subcategory</span>
                    </a>
                    <ul id="subc" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Add New</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">View All</a>
                        </li>
                    </ul>
                </li>
                <!-- Subcategory End -->
                <!-- Brand End -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#brand" aria-expanded="false" aria-controls="brand">
                        <i class="lni lni-list"></i>
                        <span>Brand</span>
                    </a>
                    <ul id="brand" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Add New</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">View All</a>
                        </li>
                    </ul>
                </li>
                <!-- Brand End -->
                <!-- Unit Menu Start -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#unit" aria-expanded="false" aria-controls="unit">
                        <i class="lni lni-calculator"></i>
                        <span>Unit Menu</span>
                    </a>
                    <ul id="unit" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Add New</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">View All</a>
                        </li>
                    </ul>
                </li>
                <!-- Unit Menu End -->
                <!-- Product Start -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#product" aria-expanded="false" aria-controls="product">
                        <i class="lni lni-agenda"></i>
                        <span>Product</span>
                    </a>
                    <ul id="product" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Add Product</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">All Product</a>
                        </li>
                    </ul>
                </li>
                <!-- Product End -->
                <!-- Supplier Start -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#supplier" aria-expanded="false" aria-controls="supplier">
                        <i class="lni lni-restaurant"></i>
                        <span>Supplier</span>
                    </a>
                    <ul id="supplier" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Add Supplier</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">All Supplier</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Add Transaction</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">All Transaction</a>
                        </li>
                    </ul>
                </li>
                <!-- Supplier End -->
                <!-- Customer Start -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#Customer" aria-expanded="false" aria-controls="Customer">
                        <i class="lni lni-customer"></i>
                        <span>Customer</span>
                    </a>
                    <ul id="Customer" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Add Customer</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">All Customer</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Add Transaction</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">All Transaction</a>
                        </li>
                    </ul>
                </li>
                <!-- Customer End -->
                <!-- Payment Reminder Start -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#pr" aria-expanded="false" aria-controls="pr">
                        <i class="lni lni-empty-file"></i>
                        <span>Payment Reminder</span>
                    </a>
                    <ul id="pr" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Add New</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">View All</a>
                        </li>
                    </ul>
                </li>
                <!-- payment Reminder End -->
                <!-- Purchase Start -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#Purchase" aria-expanded="false" aria-controls="Purchase">
                        <i class="lni lni-package"></i>
                        <span>Purchase</span>
                    </a>
                    <ul id="Purchase" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">New Purchase</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">All Purchase</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Add Pre-Order</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">All Pre-Order</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Item Wise</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Add Purchase Return</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">All Purchase Return</a>
                        </li>
                    </ul>
                </li>
                <!-- Purchase End -->
                <!-- Stock Start -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-database"></i>
                        <span>Stock</span>
                    </a>
                </li>
                <!-- Stock End -->
                <!-- Sale Start -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#sale" aria-expanded="false" aria-controls="sale">
                        <i class="lni lni-wheelbarrow"></i>
                        <span>Sale</span>
                    </a>
                    <ul id="sale" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">New Sales</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">All Sale</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Item Wise Sale</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Client Wise Sale</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Sale Return</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Add Sale Return</a>
                        </li>
                    </ul>
                </li>
                <!-- Sale End -->
                <!-- Cost Start -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#Cost" aria-expanded="false" aria-controls="Cost">
                        <i class="lni lni-credit-cards"></i>
                        <span>Cost</span>
                    </a>
                    <ul id="Cost" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Cost Category</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Field of Cost</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">New Cost</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">All Cost</a>
                        </li>
                    </ul>
                </li>
                <!-- Cost End -->
                <!-- Due Menu Start -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#Due" aria-expanded="false" aria-controls="Due">
                        <i class="lni lni-money-location"></i>
                        <span>Due Menu</span>
                    </a>
                    <ul id="Due" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Cash Due</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Credit Due</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Supplier Due</a>
                        </li>
                    </ul>
                </li>
                <!-- Due Menu End -->
                <!-- Bank Menu -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#Bank" aria-expanded="false" aria-controls="Bank">
                        <i class="lni lni-dollar"></i>
                        <span>Bank Menu</span>
                    </a>
                    <ul id="Bank" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">New Bank</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Add Bank</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">All Bank</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Add Transaction</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">All Transaction</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Bank Ledger</a>
                        </li>
                    </ul>
                </li>
                <!-- Bank Menu End -->
                <!-- Loan Start -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#Loan" aria-expanded="false" aria-controls="Loan">
                        <i class="lni lni-hand"></i>
                        <span>Loan</span>
                    </a>
                    <ul id="Loan" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Loan Person</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">New Loan</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">All Loan</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Add Transaction</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">All Transaction</a>
                        </li>
                    </ul>
                </li>
                <!-- Loan End -->
                <!-- Ledger Start -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#Ledger" aria-expanded="false" aria-controls="Ledger">
                        <i class="lni lni-library"></i>
                        <span>Ledger</span>
                    </a>
                    <ul id="Ledger" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Supplier Ledger</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Customer Ledger</a>
                        </li>
                    </ul>
                </li>
                <!-- Ledger End -->
                <!-- Report Start -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#Report" aria-expanded="false" aria-controls="Report">
                        <i class="lni lni-stats-up"></i>
                        <span>Report</span>
                    </a>
                    <ul id="Report" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Purchase Report</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Sales Report</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Cost Report</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Profit/Loss Report</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Cash Book</a>
                        </li>
                    </ul>
                </li>
                <!-- Report End -->
                <!-- HR Menu -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#HR" aria-expanded="false" aria-controls="HR">
                        <i class="lni lni-consulting"></i>
                        <span>HR Menu</span>
                    </a>
                    <ul id="HR" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">New Employee</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">All Employee</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Basic Salery</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Bonus Salary</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Advance Salary</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Salary Payment</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Take Attendance</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">All Attendance</a>
                        </li>
                    </ul>
                </li>
                <!-- HR Menu End -->
                <!-- User Role Start -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-dashboard"></i>
                        <span>User Role</span>
                    </a>
                </li>
                <!-- User Role End -->
                <!-- Setting Start -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#Setting" aria-expanded="false" aria-controls="Setting">
                        <i class="lni lni-cog"></i>
                        <span>Setting</span>
                    </a>
                    <ul id="Setting" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Logo</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Information</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Export/Import</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="includes/login.php" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <!-- Main Body Start -->
        <div class="main main-bg">
            <nav class="navbar navbar-bg justify-content-end p-3 fs-5 font-monospace ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Business Software
                        <img src="images/1.png" alt="Logo" width="50" height="35" class="d-inline-block align-text-top">
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <p class="text-center font-monospace">User Name</p>
                        </li>
                        <li><a class="dropdown-item" href="includes/register.php">Make User</a></li>
                        <li><a class="dropdown-item" href="#">All User</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Your Information</a></li>
                    </ul>
                </li>
            </nav>
            <!-- Shortcut Button Start -->
            <div class="container-fluid">
                <div class="d-grid gap-2 d-md-flex justify-content-md-center p-3">
                    <button class="btn shortcut-bg btn-inline-light " type="button">
                        <a href="#" class="text-white">Purchase Menu</a>
                    </button>
                    <button class="btn shortcut-bg btn-inline-primary" type="button">
                        <a href="#" class="text-white">Supplier Payment</a>
                    </button>
                    <button class="btn shortcut-bg btn-inline-primary" type="button">
                        <a href="#" class="text-white">Stock Menu</a>
                    </button>
                    <button class="btn shortcut-bg btn-inline-primary" type="button">
                        <a href="#" class="text-white">Sales Menu</a>
                    </button>
                    <button class="btn shortcut-bg btn-inline-primary" type="button">
                        <a href="#" class="text-white">Customer Collection</a>
                    </button>
                    <button class="btn shortcut-bg btn-inline-primary" type="button">
                        <a href="#" class="text-white">Expenditure</a>
                    </button>
                    <button class="btn shortcut-bg btn-inline-primary" type="button">
                        <a href="#" class="text-white">Daily Sheet</a>
                    </button>

                </div>
            </div>
            <!-- shortcut button end -->
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
    </div>
    <!-- Wrapper End -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
</body>

</html>