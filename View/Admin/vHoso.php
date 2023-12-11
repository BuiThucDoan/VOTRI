<?php


include 'Includes/functions/functions.php'; 
include 'Includes/templates/adminHeader.php';


?>
<main id="main" class="main">

  <div class="" >
    <h1>Hồ sơ</h1>
  </div><!-- End Page Title -->

  <section class="section profile">
    <div class="row">
      <div class="col-xl-4">

        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
            <img src="Design/images/<?php echo $_SESSION['is_login']['hinhanh'] ?>" alt="Profile" class="rounded-circle" style="width: 100px; height: 100px;">
            <?php if (isset($_SESSION['is_login']['hoten'])) { ?>
              <h2><?php echo $_SESSION['is_login']['hoten']; ?></h2>
              <h3><?php echo $_SESSION['is_login']['tenvaitro']; ?></h3>
            <?php } ?>
            <div class="social-links mt-2">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

      </div>

      <div class="col-xl-8">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">
              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Tổng quan</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Chỉnh sửa hồ sơ</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Đổi mật khẩu</button>
              </li>
            </ul>
            <div class="tab-content pt-2">
              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">Chi tiết hồ sơ</h5>
                
                <!-- Add your profile details here -->
              </div>

              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                <!-- Profile Edit Form -->
                <form>
                  <!-- Add your profile edit form fields here -->
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                  </div>
                </form>
                <!-- End Profile Edit Form -->
              </div>

              <div class="tab-pane fade pt-3" id="profile-change-password">
                <!-- Change Password Form -->
                <form>
                  <!-- Add your change password form fields here -->
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
                  </div>
                </form>
                <!-- End Change Password Form -->
              </div>

            </div><!-- End Bordered Tabs -->
          </div>
        </div>

      </div>
    </div>
  </section>
</main>
<?php include 'Includes/templates/adminFooter.php';?>
