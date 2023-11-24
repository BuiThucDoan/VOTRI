
<?php
// include controller Company
include_once("Controller/cThucdon.php");

class ViewMenu
{
    // tao moi dooi tuong controller company
    function viewAllMenu()
    {
        $p = new controlMenu();
        $tblMenu = $p->getAllMenu();

        if ($tblMenu) {
            // kiemm tra ket qua nhan duoc co du lieu
            if ($tblMenu->num_rows > 0) {
                // duyet tung dong du lieu trong ket qua nhan duoc
                while ($row = $tblMenu->fetch_assoc()) {
                    // hien thi ket qua nhan duoc
                    echo "<a href='thucdon.php?menu=" . $row["idthucdon"] . "'>" . $row["tenthucdon"] . "</a><br>";
                }
            } else {
                echo "0 result";
            }
        } else {
            echo "Error";
        }
    }
}
?>
