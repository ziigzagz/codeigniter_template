<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Components Part</title>
</head>
<?php
function get_client_ip()
{
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if (getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if (getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if (getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if (getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if (getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
?>

<body class="bg-dark ">

    <div class="container">
        <div class="row ">
            <div class="col-md-6 mx-auto mt-1">
                <div class="card shadow bg-white rounded card-login">
                    <div class="card-header text-center p-1">
                        <hr>
                        <h4>Components Part</h4>
                        <!-- <div class="progress">
                            <div class="progress-bar bg-success" id="processbar" role="progressbar" style="width: 2%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
                        </div> -->
                    </div>
                    <div class="card-body text-center">
                        <form action="Login/checklogin" method="POST">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="id" aria-describedby="emailHelp" autocomplete="off" placeholder="รหัสพนักงาน" name="id">
                            </div>
                        </form>
                    </div>
                    <hr>
                    <div class="card-footer text-right">
                        <!-- <button class="btn btn-warning" onclick="unban_ip()">ปลดล็อคหมายเลข IP เครื่องนี้</button> -->
                        <button class="btn btn-warning" onclick="unban_id()">ปลดล็อครหัสพนักงาน</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("id").focus();
        $("id").focus();
        function unban_ip() {
            Swal.fire({
                title: 'ปลดล็อค IP เครื่อง',
                html: '<input type="password" id="password" class="swal2-input" placeholder="รหัสปลดล็อคเครื่อง">',

                confirmButtonText: 'ยืนยัน',
                focusConfirm: false,
                preConfirm: () => {
                    var path = '<?php echo base_url(); ?>Home/unbanIP';
                    const password = Swal.getPopup().querySelector('#password').value
                    console.log(password)
                    data = {
                        ip: '<?php echo get_client_ip(); ?>',
                        password: password,
                    }
                    $.post(path, data, function(data) {
                        if (data == 1) {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'ปลดล็อคสำเร็จ',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'ไม่สามารถปลดล็อคได้',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                    });

                }
            })
        }

        function unban_id() {
            Swal.fire({
                title: 'ปลดล็อค รหัสพนักงาน',
                html: '<input type="text" autocomplete="off"  id="id" class="swal2-input" placeholder="รหัสพนักงาน"><input type="password" id="password" autocomplete="off" class="swal2-input" placeholder="รหัสปลดล็อค">',
                confirmButtonText: 'ยืนยัน',
                focusConfirm: false,
                preConfirm: () => {
                    var path = '<?php echo base_url(); ?>Home/unbanID';
                    const id = Swal.getPopup().querySelector('#id').value
                    const password = Swal.getPopup().querySelector('#password').value

                    data = {
                        id: id,
                        password: password,
                    }
                    $.post(path, data, function(data) {

                        if (data == 1) {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'ปลดล็อคสำเร็จ',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                title: 'ไม่สามารถปลดล็อคได้',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                    });

                }
            })
        }
        <?php
        if (isset($_SESSION['status_ban'])) {
            if ($_SESSION['status_ban'] == 'yes') {
                echo "Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'รหัสพนักงานนี้ ถูกระงับการใช้งาน โปรดติดต่อหัวหน้างานเพื่อทำการปลดล็อค',
            showConfirmButton: false,
            timer: 5000
          });";
            }
        } else {
            if (isset($_SESSION['status_login'])) {
                if ($_SESSION['status_login'] == 'fail') {
                    echo "Swal.fire({
                   position: 'center',
                   icon: 'error',
                   title: 'ไม่สามารถเข้าสู่ระบบได้ ',
                   showConfirmButton: false,
                   timer: 1000
                 });";
                } else if ($_SESSION['status_login'] == 'success') {
                    echo "Swal.fire({
                   position: 'center',
                   icon: 'success',
                   title: 'Login conplete',
                   showConfirmButton: false,
                   timer: 1000
                 });";
                }
            }
        }


        ?>
    </script>
</body>

</html>