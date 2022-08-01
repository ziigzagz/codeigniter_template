<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url() ?>css\buttons.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css\jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/sb-admin-2.min.css" rel="stylesheet">
    <title>SB Admin 2 - Dashboard</title>
    <style>
        .table {
            caption-side: top !important;
        }

        table {
            caption-side: top !important;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include_once(APPPATH . 'views/Nav/Navbar_admin.php'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>




                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-12 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                IN (today)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php print_r($in_today[0]->count); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-level-down-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-12 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                OUT (today)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php print_r($out_today[0]->count); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-level-up-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-12 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                IN (All)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php print_r($in_all[0]->count); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-chevron-circle-down fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-12 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                OUT (All)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php print_r($out_all[0]->count); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-chevron-circle-up fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="ๅ col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Component Report Chart (Year)</h6>
                                </div>
                                <div class="card-body">
                                    <select name="" id="">
                                        <?php foreach ($year as $item) { ?>
                                            <option value=""><?php echo $item->year; ?></option>
                                        <?php } ?>
                                    </select>
                                    <div class="chart-area" id="chartm">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Component Report Chart</h6>
                                </div>
                                <div class="card-body">
                                    <select class="form-select" name="" id="year" onchange="update_chart(this)">
                                        <?php foreach ($year as $item) { ?>
                                            <option value="<?php echo $item->year; ?>"><?php echo $item->year; ?></option>
                                        <?php } ?>
                                    </select>
                                    <select class="form-select" aria-label="Default select example" id="month" onchange="update_chart(this)">
                                        <option value="1">January </option>
                                        <option value="2">February </option>
                                        <option value="3">March </option>
                                        <option value="4">April </option>
                                        <option value="5">May </option>
                                        <option value="6">June </option>
                                        <option value="7">July</option>
                                        <option value="8">August </option>
                                        <option value="9">September </option>
                                        <option value="10">October </option>
                                        <option value="11">November </option>
                                        <option value="12">December </option>
                                    </select>
                                    <div class="chart-area" id="charty">
                                    </div>
                                    <div class="row text-center">
                                        <div class="col">
                                            วันที่
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-2 col-6">
                                            วันที่ : <input type="date" class="form-control " name="" id="date" onchange="search()">
                                        </div>
                                        <div class="col-lg-2 col-6">
                                            Part_No : <input type="text" class="form-control " name="" id="Part_No" onkeyup="search()">
                                        </div>
                                        <div class="col-lg-2 col-6">
                                            Supplier : <input type="text" class="form-control " name="" id="supplier" onkeyup="search()">
                                        </div>
                                        <div class="col-lg-2 col-6">
                                            Address : <input type="text" class="form-control " name="" id="Address" onkeyup="search()">
                                        </div>
                                        <div class="col-lg-2 col-6">
                                            รหัสพนักงาน : <input type="text" class="form-control " name="" id="userID" onkeyup="search()">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>วันที่ : </th>
                                                <th>Part_No : </th>
                                                <th>Supplier :</th>
                                                <th>Address : </th>
                                                <th>รหัสพนักงาน : </th>
                                            </tr>

                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; </span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

</body>

</html>