<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
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
                        <!-- <div class="col-xl-3 col-md-12 mb-4">
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
                        </div> -->
                    </div>
                    <!-- <div class="row">
                        <div class="col-lg-12">
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
                    <!-- <div class="row">
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
                    </div> -->

                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-2 col-6">
                                            วันที่ : <input type="date" class="form-control " name="" id="date" onchange="search()">
                                        </div>
                                        <div class="col-lg-2 col-6">
                                        Kanban : <input type="text" class="form-control " name="" id="Kanban"  onkeyup="search()">
                                        </div>
                                  
                                        <div class="col-lg-2 col-6">
                                            Address : <input type="text" class="form-control " name="" id="Address"  onkeyup="search()">
                                        </div>
                                        <div class="col-lg-2 col-6">
                                            รหัสพนักงาน : <input type="text" class="form-control " name="" id="UserID"  onkeyup="search()">
                                        </div>
                                        <div class="col-lg-2 col-6">
                                            
                                            <button class="btn btn-warning form-control mt-3" onclick="search()">ค้นหา</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table" id="myTable">
                                        <caption></caption>
                                        <thead>
                                            <tr>
                                                <th>วันที่ : </th>
                                                <th>Kanban : </th>
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
                        <span>Copyright &copy; Iffan </span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="<?php echo base_url() ?>node_modules\apexcharts\dist\apexcharts.min.js"></script>
    <script src="<?php echo base_url() ?>node_modules\datatables.net\js\jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>node_modules\datatables.net-bs4\js\dataTables.bootstrap4.js"></script>
    <script>
        var t = $("#myTable").DataTable({
            "paging": true,
            "columns": [{
                    "data": "Datetime"
                },
                {
                    "data": "Kanban"
                },
                // {
                //     "data": "Lot"
                // },
                {
                    "data": "Address"
                },
                {
                    "data": "UserID"
                }
            ],
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
            "order": [
                [0, "desc"]
            ],
            "data": [],
            "language": {
                "info": "แสดง _START_ ถึง _END_ จากทั้งหมด _TOTAL_ รายการ",
            }
        });


        var path = '<?php echo base_url(); ?>Home/get_data_search_error';
        data = {
                "date": $("#date").val(),
                "Kanban": $("#Kanban").val(),
                "Address": $("#Address").val(),
                "UserID": $("#UserID").val(),
            }
        $.post(path, data, function(data) {
            console.log(data);
            var tmp = JSON.parse(data);
            t.rows.add(tmp).draw();
        });
    </script>
    <script>
        function search() {
            var path = '<?php echo base_url(); ?>Home/get_data_search_error';
            data = {
                "date": $("#date").val(),
                "Kanban": $("#Kanban").val(),
                "Address": $("#Address").val(),
                "UserID": $("#UserID").val(),
            }
            // console.log(data);
            $.post(path, data, function(data) {
                // console.log((data));
                var tmp = JSON.parse(data);
                t.clear().draw();
                t.rows.add(tmp).draw();
            });
        }

        // function get_data_in() {
        //     return new Promise(resolve => {
        //         var path = '<?php echo base_url(); ?>Home/get_chart_month_in';
        //         var d;
        //         data = {
        //             year: document.getElementById("year").value,
        //             month: document.getElementById("month").value,
        //         }
        //         $.post(path, data, function(data) {
        //             // console.log(JSON.parse(data));
        //             d = JSON.parse(data);
        //             resolve(d);
        //         });
        //     });
        // }

        // function get_data_out() {
        //     return new Promise(resolve => {
        //         var path = '<?php echo base_url(); ?>Home/get_chart_month_out';
        //         var d;
        //         data = {
        //             year: document.getElementById("year").value,
        //             month: document.getElementById("month").value,
        //         }
        //         $.post(path, data, function(data) {
        //             // console.log(JSON.parse(data));
        //             d = JSON.parse(data);
        //             resolve(d);
        //         });
        //     });
        // }

        // function get_xaxis() {
        //     var i;
        //     var l = []
        //     return new Promise(resolve => {
        //         setTimeout(() => {
        //             var i;
        //             var l = []
        //             for (i = 1; i <= 31; ++i) {
        //                 l.push(i);
        //             }
        //             resolve(l);

        //         }, 0);
        //     });
        // }
        // async function create_chart() {
        //     var options = {
        //         series: [{
        //                 name: 'In',
        //                 data: await get_data_in(),
        //             },
        //             {
        //                 name: 'Out',
        //                 data: await get_data_out(),
        //             },
        //         ],
        //         chart: {
        //             height: 390,
        //             type: 'bar',
        //         },
        //         plotOptions: {
        //             bar: {
        //                 borderRadius: 10,
        //                 dataLabels: {
        //                     position: 'top', // top, center, bottom
        //                 },
        //             }
        //         },
        //         dataLabels: {
        //             enabled: true,
        //             formatter: function(val) {
        //                 return val;
        //             },
        //             offsetY: -20,
        //             style: {
        //                 fontSize: '12px',
        //                 colors: ["#304758"]
        //             }
        //         },
        //         xaxis: {
        //             categories: await get_xaxis(),
        //             position: 'bottom',
        //             axisBorder: {
        //                 show: false
        //             },
        //             axisTicks: {
        //                 show: false
        //             },
        //             crosshairs: {
        //                 fill: {
        //                     type: 'gradient',
        //                     gradient: {
        //                         colorFrom: '#D8E3F0',
        //                         colorTo: '#BED1E6',
        //                         stops: [0, 100],
        //                         opacityFrom: 0.4,
        //                         opacityTo: 0.5,
        //                     }
        //                 }
        //             },
        //             tooltip: {
        //                 enabled: true,
        //             }
        //         },
        //         yaxis: {
        //             axisBorder: {
        //                 show: false
        //             },
        //             axisTicks: {
        //                 show: false,
        //             },
        //             labels: {
        //                 show: false,
        //                 formatter: function(val) {
        //                     return val + " รายการ";
        //                 },
        //             }
        //         },

        //     };
        //     chart = new ApexCharts(document.querySelector("#charty"), options);
        //     chart.render();
        //     // var chart = new ApexCharts(document.querySelector("#charty"), options);
        //     // chart.render();
        // }
        // const d = new Date();
        // let month = d.getMonth() + 1;
        // document.getElementById("month").value = month
        // console.log(month);
        // var chart;
        // create_chart();
        // async function update_chart(e) {
        //     console.log(e.value);
        //     chart.updateOptions({
        //         series: [{
        //                 name: 'In',
        //                 data: await get_data_in(),
        //             },
        //             {
        //                 name: 'Out',
        //                 data: await get_data_out(),
        //             },
        //         ]
        //     })
        //     chart.update
        // }
    </script>

</body>

</html>