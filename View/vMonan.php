<?php
include("Controller/cMonan.php");

class viewMonan
{
    function viewAllMonan()
    {
        $p = new controlMonan();
        $tbl = $p->getAllMonan();
        $this->displayProduct($tbl);
    }

    function viewAllMonanbyLoai($cate)
    {
        $p = new controlMonan();
        $tbl = $p->getAllMonanbyLoai($cate);
        $this->displayProduct($tbl);
    }

    function viewAllMonanbyThucdon($menu)
    {
        $p = new controlMonan();
        $tbl = $p->getAllMonanbyThucdon($menu);
        $this->displayProduct($tbl);
    }

    function viewAllMonanbyMenuAndCate($menu, $cate)
    {
        $p = new controlMonan();
        $tbl = $p->getAllMonanbyMenuAndCate($menu, $cate);
        $this->displayProduct($tbl);
    }

    function displayProduct($tbl)
    {
        if ($tbl) {
            if ($tbl->num_rows > 0) {
                $p = new controlMonan();
                $dem = 0;
                echo '<div class="container">';
                echo '<div class="row justify-content-center">';
                echo '<div class="col-md-10">';

                echo '<div class="row">';
                while ($row = $tbl->fetch_assoc()) {
                    if ($dem % 4 == 0) {
                        echo '</div><div class="row">';
                    }
                    echo '<div class="col-md-3">';
                    echo '<div class="thumbnail" style="cursor:pointer">';
                    echo '<div class="menu-image">';
                    echo '<div class="circular-image">';

                    echo '<img src="Design/image/' . $row['hinhanh'] . '" style="width: 150px; height: 150px; border-radius: 50%; border: 4px solid orange;" /><br>';
                    echo '</div>';
                    echo '</div>';
                    echo '<br><p><b>' . $row['tenmonan'] . '</b></p>';
                    echo number_format($row['gia'], 0, ',', '.') . ' VND';
                    echo '<br>';
                    echo '<a class="btn btn-primary " href="thucdon.php?id=' . $row['id_monan'] . '" onclick="showDetails(this)"><i class="fa fa-eye"></i>Xem chi tiết</a>';
                    echo '<div class="buttondatmon">';
                    echo '<a href="order_food.php" class="btn btn-danger btn-icon" style="margin: 5px 0;">';

                    echo 'Đặt món';

                    echo '</a></div>';
                    echo '<br><br></div>';
                    echo '</div>';
                    $dem++;
                }

                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            } else {
                echo '0 result';
            }
        }
    }
}
?>
