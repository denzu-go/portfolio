<?php
session_start();
include '../../database/connection.php';
if (isset($_SESSION['admin_id'])) {
  header('location:index.php');
  exit();
}
$credentials = '';

if (isset($_SESSION['credentials'])) {
  $credentials = $_SESSION['credentials'];
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
              
                <?php

                if ($credentials == 'false') {
                  echo '<p style="color:red;">Username or Password is Wrong</p>';
                  unset($_SESSION['credentials']);
                }

                ?>

                <form action="admin_process_login.php" method="post" id="contactForm" novalidate="novalidate">
                  <div class="form-group">
                    <label><strong>Username</strong></label>
                    <input type="text" name="username" class="form-control">
                  </div>
                  <div class="form-group">
                    <label><strong>Password</strong></label>
                    <input type="password" name="password" class="form-control">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
                  </div>
                </form>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>