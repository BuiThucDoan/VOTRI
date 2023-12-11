<?php

include_once("Controller/cPhieudatmon.php");


$p = new controlPhieu();
$idtaikhoan =  $_SESSION['is_login']['idtaikhoan'];
$maNV =  $_SESSION['is_login']['maNV'];

$order = $p->getPayByIdTaiKhoan($idtaikhoan);


?>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
    }

    .order-container {
        max-width: 80%;
        margin: auto;
        background-color: #fff;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        margin-top: 50px;
        padding: 30px;
    }

    h2 {
        color: #dc3545;
    }

    label {
        color: #495057;
        font-weight: bold;
    }

    .order-item {
        margin-bottom: 20px;
    }

    .order-item span {
        color: #6c757d;
        display: block;
        margin-top: 8px;
    }

    .btn-confirm {
        background-color: #28a745;
        color: #fff;
        border: none;
        padding: 15px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-confirm:hover {
        background-color: #218838;
    }

    @media (max-width: 768px) {
        .order-container {
            padding: 20px;
        }
    }

    .infor p {
        margin-top: -20px;
        text-align: center;
        font-size: 14px;
    }

    .inforOrder p {
        margin-top: -10px;
    }

    .payment-method img {
        width: 55px;
        height: 34px;
        margin: 5px;
    }

    .payment-method form {
        display: inline-block;
        margin-right: 10px;
    }

    .payment-method input {
        margin-top: 10px;
    }

    .btn-primary,
    .btn-danger {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
    }
</style>

<main id="main" class="main">

    <div class="pagetitle">


        <div class="col-lg-12 col-md-12 ">
            <div class="order-container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="infor" style="border-bottom: 1px solid;">

                            <h2 class="text-center text-danger mb-3"><i><b>VOTRI</b></i></h2>
                            <p>BẾP ĂN TẬP ĐOÀN VÔ TRI</p>
                            <p>12 Nguyễn Văn Bảo, Phường 4, Gò Vấp, TP.HCM</p>
                            <p>Mã số thuế: 123456789</p>
                            <p>email: votri666.@gmail.com</p>
                            <p>Hotline: 0123456789</p>

                        </div>
                        <h5 class="mt-2 text-center">Thông Tin Đơn Hàng</h5>
                        <div class="inforOrder" style="border-bottom: 1px solid;">
                            <?php $maPhieu = $idtaikhoan . rand(0, 100000);
                            $_SESSION[$maNV]['maPhieu'] = $maPhieu;
                            if (isset($_GET['total'])) {
                                $_SESSION[$maNV]['sotien'] = $_GET['total'];
                            } else {
                                $_SESSION[$maNV]['sotien'] = 0;
                            }

                            ?>
                            <h6 class=""><span>Mã Đơn hàng:</span> <span style="position: absolute; right: 20px;"><?php echo $maPhieu ?></span></h6>
                            <?php $date = date('H:i:s d/m/Y'); ?>
                            <h6 class="mb-3"><span>Ngày giờ:</span> <span style="position: absolute; right: 20px;"><?php echo $date ?></span></h6>
                            <?php 
                            $monan = array();
                            foreach ($order as $index=>$od) {

                                $monan[] =  [
                                  'tenmonan'=>  $od['tenmonan'],
                                   'soluong' =>$od['soluong'],
                                   'gia' => $od['gia']
                                
                                 ] ;
                        
                                 $_SESSION[$maNV]['monan'] = $monan;
                            ?>


                                <h6><?php echo $od['tenmonan'] ?>:</h6>
                                <p style="margin-top: -7px;"><span><?php echo $od['soluong'] . ' x ' . number_format($od['gia']) ?> </span> <span style="position: absolute; right: 20px;"><?php echo number_format($od['soluong'] * $od['gia']) ?></span></p>


                            <?php } ?>
                        </div>

                        <h6 class="mt-1 m-3"><span>Tổng cộng</span> <span style="position: absolute; right: 20px;"><?php if (isset($_GET['total'])) {
                                                                                                                        echo number_format($_GET['total']);
                                                                                                                    } ?></span></h6>

                        <h6 class="text-center mt-3">Cảm ơn quý khách <br> Hẹn gặp lại</h6>
                        <p class="text-center">Phiếu tính tiền chỉ có giá trị trong ngày <br>
                            <b>|||||</b>||||<b>||||</b>|||||<b>|||</b>||||||||<b>||||||||||||||||</b>|||||<b>||||||||||</b>||||<b>||||||||||||</b>|||||<br>
                            0766270100000120001381231111113000032
                        </p>

                    </div>

                    <div class="col-md-6">
                        <h3 class="mb-4"><b><i>Hình Thức Thanh Toán</i></b></h3>

                        <form method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="index.php?mod=Order&act=CongThanhToanMoMo_QR">

                            <input type="hidden" name="infor" value="<?php if (isset($_GET['user'])) {
                                                                            echo $_GET['user'];
                                                                        } ?>">
                            <input type="hidden" name="total" value="<?php if (isset($_GET['total'])) {
                                                                            echo $_GET['total'];
                                                                        } ?>">
                            <input class="btn btn-danger mt-3" type="submit" value="Thanh toán QR bằng MoMo" name="momo">
                        </form>
                        <form method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="index.php?mod=Order&act=CongThanhToanMoMo_ATM">
                            <input type="hidden" name="infor" value="<?php if (isset($_GET['user'])) {
                                                                            echo $_GET['user'];
                                                                        } ?>">
                            <input type="hidden" name="total" value="<?php if (isset($_GET['total'])) {
                                                                            echo $_GET['total'];
                                                                        } ?>">
                            <input class="btn btn-primary mt-3 " type="submit" value="Thanh toán qua thẻ Visa/Master/Napas" name="momo">
                        </form>


                    </div>
                </div>

            </div>
        </div>
    </div>



</main>
