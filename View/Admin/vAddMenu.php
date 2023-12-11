<?php
var_dump($_POST);
include_once("Controller/cMonan.php");
include_once("Controller/cMenu.php");

$p = new controlMonan();
$menu = new controlMenu();
$list_loai = $p->getAllMonAn();

$LatestMenu = $menu->getMenu();
$list_menu = $menu->getAllMenu();
?>
<style>
    .form-container {
        display: none;
    }
</style>

<div id="content" style="margin-left:240px;"> 
    <section class="content-wrapper" style="width: 100%;padding: 70px 0 0;">
<div class="container-fluid px-4 add">
    <div class="upload">
        <h2 class="mt-4 m-3">Thêm món vào thực đơn</h2>
        <table class="admin_upload">
            <form action="" method="post">
                <tr>
                    <th>Chọn ngày lên món:</th>
                    <th><input type="date" name="date" id="date" value="<?php if (isset($_POST['date'])) echo $_POST['date'] ?>" required>
                        <input style="display: none;" type="submit" value="Submit" id="submitBtn" name="sub_date">
                    </th>
                </tr>
                <tr>
                    <th>Chọn món </th>
                    <th>
                        <div style="display: flex; flex-wrap:wrap">

                            <?php

                            if (isset($_POST['date'])) {
                                $ngay = $_POST['date'];
                                $date =  new DateTime($ngay);
                                $date = $date->format('Y-m-d H:i:s');


                                $ngaymoi = (new DateTime($ngay))->modify('+1 day')->format('Y-m-d');
                                $thu = date('l', strtotime($date));

                                if ($thu == 'Monday') {
                                    $ngaycu = (new DateTime($ngay))->modify('-3 day')->format('Y-m-d');
                                } else {
                                    $ngaycu = (new DateTime($ngay))->modify('-1 day')->format('Y-m-d');
                                }

                                $menu = new controlMenu();
                                $cu = $menu->getMenuByDate($ngaycu);
                                $moi = $menu->getMenuByDate($ngaymoi);
                                $today = $menu->getMenuByDate($date);

                                $mon = array();


                                $ngayHientai =  (new DateTime())->format('Y-m-d H:i:s');


                                if ($thu == 'Sunday') {
                                    echo "<script>alert('không được lên lịch cuối tuần ')</script>";
                                } elseif ($date <= $ngayHientai) {
                                    echo "<script>alert('Chỉ được phép lên lịch cho thời gian sau ngày hôm nay!')</script>";
                                } else {

                                    foreach ($list_loai as $index => $monan) {
                                        $found = true;

                                        if (!empty($cu)) {
                                            foreach ($cu as $item) {
                                                if ($monan['id_monan'] == $item['id_monan']) {
                                                    $found = false;
                                                }
                                            }
                                        }

                                        if (!empty($moi)) {
                                            foreach ($moi as $item) {
                                                if ($monan['id_monan'] == $item['id_monan']) {
                                                    $found = false;
                                                }
                                            }
                                        }
                                        if (!empty($today)) {
                                            foreach ($today as $item) {
                                                if ($monan['id_monan'] == $item['id_monan']) {
                                                    $found = false;
                                                }
                                            }
                                        }

                                        if ($found == true) { ?>
                                            <div style="border-radius: 5px; padding:5px; margin: 5px 5px; border:1px solid; width:150px" class="dish_mon">
                                                <label for="checkbox<?php echo $index ?>"><?php echo $monan['tenmonan'] ?></label>
                                                <input type="checkbox" class="show-form" data-form="form<?php echo $index ?>" id="checkbox<?php echo $index ?>" style="margin-right:20px; float: right; margin-top: 5px;" name="monan[]" id="" value="<?php echo $monan['id_monan'] ?>">
                                            </div>
                            <?php      }
                                    }
                                }
                            }
                            ?>
                        </div>
                    </th>
                </tr>




                <tr>

                    <td>


                    </td>
                    <td>
                        <input type="submit" value="Thêm" id="submit" name="btn_addmenu" onclick="return validateCheckbox()">
                        <input type="reset" value="Hủy" id="reset" name="" >


                    </td>
                </tr>

                <?php
$menu = new controlMenu();

if (isset($_POST['sub_date'])) {
    if (isset($_POST['date'])) {
        $isAllowed = true;

        // Check if the date already exists in the list of menus
        if (!empty($list_menu)) {
            foreach ($list_menu as $index => $item) {
                $as = (new DateTime($item['ngaytao']))->format('Y-m-d');

                if ($_POST['date'] == $as) {
                    $isAllowed = false;
                    break;
                }
            }
        }

        // Check if the date is in the future and not a Sunday
        if ($isAllowed && $_POST['date'] > $ngayHientai && $thu != 'Sunday') {
            $ngaytao = (new DateTime($_POST['date']))->format('Y-m-d H:i:s');
            
            // Insert a new menu for the selected date
            $menu->InsertMenu($ngaytao);
        } else {
            $isAllowed = false;
        }
    }
}
?>

            </form>
        </table>
    </div>
</div>
    </section>
</div>

</body>

</html>
<?php
//Thêm món ăn và idThucDon và chitietthucdon


// Thêm món ăn và idThucDon và chitietthucdon
if (isset($_POST['btn_addmenu'])) {
    $id_monan = isset($_POST['monan']) ? $_POST['monan'] : array();
    $ngaytao = $_POST['date'];

    $menu = new controlMenu();
    $ThucDon = $menu->getoneMenuByDate($ngaytao);

    var_dump($ThucDon); // In ra giá trị để kiểm tra

    if ($ThucDon !== null && isset($ThucDon['idthucdon'])) {
        $idthucdon = $ThucDon['idthucdon'];
        $ins = $menu->InsertMenuDetails($idthucdon, $id_monan);
        
        if ($ins === true) {
            echo '<script>alert("Thêm món thành công")</script>';
            echo header("refresh: 0; url='admin.php?mod=addMenu'");
        } else {
            echo '<script>alert("Thêm món thất bại")</script>';
        }
    } else {
        echo '<script>alert("Không tìm thấy thông tin thực đơn cho ngày đã chọn")</script>';
    }
}
?>