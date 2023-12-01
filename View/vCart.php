<?php
include 'Includes/functions/functions.php';
include "Includes/templates/header.php";
include "Includes/templates/navbar.php";
?>

    <section class="ab-info-main py-5">
        <div class="container py-3">
            <h3 class="tittle text-center">View Cart</h3>
            <div class="row contact-main-info mt-5">
                <div class="col-md-6 contact-right-content">
                    <!-- left -->
                    <?php
                        //echo var_dump($_SESSION['giohang']);
                        if((isset($_SESSION['giohang']) && (count($_SESSION['giohang']))>0)){
                            echo '<table>
                                <tr>
                            '; 
                        }
                    ?>

                    
                </div>
                <div class="col-md-6 contact-left-content">
                    <!-- right -->

                </div>

            </div>
        </div>
    </section>

    <?php
    	include_once ("Includes/templates/footer.php");
    ?>
