<?php
session_start();
include '../../database/connection.php';

if (isset($_SESSION['admin_id'])) {
  $admin_id = $_SESSION['admin_id'];
} else {
  header("Location: admin_login.php");
  exit;
}

$title = "hashasd";
?>

<!doctype html>
<html lang="en">

<?php
include 'global/head.php';
?>

<style>
  #dropdown_client_table {
    border-collapse: collapse;
    width: 100%;
    border: none;
  }

  #dropdown_client_table,
  #dropdown_client_table tbody,
  #dropdown_client_table tr,
  #dropdown_client_table td {
    padding: 0;
    margin: 0;
  }

  #dropdown_client_table td {
    border: none;
  }

  #dropdown_client_table th {
    padding: 0;
    margin: 0;
    border: none;
  }

  #dropdown_client_table tbody tr {
    padding: 0;
    margin: 0;
    border: none;
    background-color: transparent;
  }




  #dropdown_output_table {
    border-collapse: collapse;
    width: 100%;
    border: none;
  }

  #dropdown_output_table,
  #dropdown_output_table tbody,
  #dropdown_output_table tr,
  #dropdown_output_table td {
    padding: 0;
    margin: 0;
  }

  #dropdown_output_table td {
    border: none;
  }

  #dropdown_output_table th {
    padding: 0;
    margin: 0;
    border: none;
  }

  #dropdown_output_table tbody tr {
    padding: 0;
    margin: 0;
    border: none;
    background-color: transparent;
  }


  .ellipsis {
    max-width: 170px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    display: inline-block;
  }

  .ellipsis-min {
    max-width: 100px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    display: inline-block;
  }
</style>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

    <?php include 'global/sidebar.php'; ?>

    <!--  Main wrapper -->
    <div class="body-wrapper">

      <?php include 'global/header.php'; ?>


    </div>

  </div>





  <?php include 'global/scripts.php'; ?>


</body>

</html>