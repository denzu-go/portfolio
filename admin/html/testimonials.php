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

      <div class="container-fluid">

        <div class="row">

          <div class="col d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="mb-4">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title fw-semibold">Testimonials</h5>
                    </div>
                    <div class="col text-end">
                      <button class="btn btn-primary" id="add_testimonial">Add Testimonial</button>
                    </div>
                  </div>
                </div>

                <table id="constantTable" class="display" style="width: 100%;">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0 small">Image</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Name</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Position</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Testimony</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Actions</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>

              </div>
            </div>
          </div>

        </div>

        <!-- <?php include 'global/footer.php'; ?> -->

      </div>

    </div>

  </div>




  <!-- MODALS -->

  <!-- Add Output Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addModalLabel">Add Testimonial</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Add client form -->
          <form id="addForm" onsubmit="return false;">

            <div class="mb-3">
              <label for="linkInput" class="form-label">Client Image:</label>
              <textarea type="text" class="form-control" id="iconInput" required></textarea>
              <?php
              $sql = "SELECT * FROM tutorials WHERE title = 'graphics'";
              $result = $conn->query($sql);
              while ($fetched = $result->fetch_assoc()) {
                $link = $fetched['link'];

                echo '
                <em>
                  <p class="small text-muted font-italic" id="modal-subtitle"><a href="' . $link . '" target="_blank">click this to learn how</a></p>
                </em>
                ';
              }
              ?>
            </div>

            <div class="mb-3">
              <label for="linkInput" class="form-label">Name:</label>
              <input type="text" class="form-control" id="nameInput" required>
            </div>

            <div class="mb-3">
              <label for="linkInput" class="form-label">Position:</label>
              <input type="text" class="form-control" id="positionInput" required>
            </div>

            <div class="mb-3">
              <label for="linkInput" class="form-label">Testimony:</label>
              <textarea type="text" class="form-control" id="testimonyInput" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary" id="addTestimonial">Submit</button>
          </form>

        </div>
      </div>
    </div>
  </div>



  <!-- edit output -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" id="outputModalBody">
        <div class="modal-header pb-0">
          <h5 class="modal-title">Edit Testimony: </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form id="editOutputForm" onsubmit="return false;">
            <input type="hidden" id="constantId">
            <input type="hidden" id="outputClientId">

            <div class="mb-3">
              <label for="linkEdit" class="form-label">Client Image:</label>
              <textarea type="text" class="form-control" id="iconEdit" required></textarea>
              <?php
              $sql = "SELECT * FROM tutorials WHERE title = 'graphics'";
              $result = $conn->query($sql);
              while ($fetched = $result->fetch_assoc()) {
                $link = $fetched['link'];

                echo '
                <em>
                  <p class="small text-muted font-italic" id="modal-subtitle"><a href="' . $link . '" target="_blank">click this to learn how</a></p>
                </em>
                ';
              }
              ?>
            </div>



            <div class="mb-3">
              <label for="linkEdit" class="form-label">Name:</label>
              <input type="text" class="form-control" id="nameEdit" required>
            </div>

            <div class="mb-3">
              <label for="linkEdit" class="form-label">Position:</label>
              <input type="text" class="form-control" id="positionEdit" required>
            </div>

            <div class="mb-3">
              <label for="linkEdit" class="form-label">Testimony:</label>
              <textarea type="text" class="form-control" id="testimonyEdit" required></textarea>
            </div>

            <button type="button" class="btn btn-primary" id="saveEdit">Save Changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>





  <?php include 'global/scripts.php'; ?>

  <script>
    $(document).ready(function() {


      $('#constantTable').DataTable({
        searching: true,
        info: false,
        paging: false,
        ordering: false,
        responsive: true,
        scrollX: true,
        ajax: {
          url: "constants_testimonials/json_constants_table.php",
          data: {},
          dataSrc: ""
        },
        columnDefs: [{
            width: "15%",
            targets: 0
          },
          {
            width: "20%",
            targets: 1
          },
          {
            width: "20%",
            targets: 2
          },
          {
            width: "40%",
            targets: 3
          },
          {
            width: "5%",
            targets: 4
          },
        ],
        columns: [{
            data: "icon"
          },
          {
            data: "name",
            className: "text-center"
          },
          {
            data: "position",
            className: "text-center"
          },
          {
            data: "testimony",
            className: "text-center"
          },
          {
            data: "actions",
            className: "text-center"
          },
        ]
      });


      $("#add_testimonial").click(function() {
        $('#addModal').modal('show');
      });

      $("#addTestimonial").click(function() {
        var iconInput = $("#iconInput").val();
        var nameInput = $("#nameInput").val();
        var positionInput = $("#positionInput").val();
        var testimonyInput = $("#testimonyInput").val();

        if (iconInput === '' || nameInput === '' || testimonyInput === '') {
          iziToast.error({
            color: 'red',
            progressBarColor: '#0c344e',
            title: 'Error',
            message: 'All fields are required.',
            titleColor: '#0c344e',
            messageColor: '#0c344e',
            timeout: 4000,
            overlayColor: 'rgba(0, 0, 0, 0.7)',
          });
          return;
        }

        $.ajax({
          url: 'constants_testimonials/process_add_constant.php',
          type: 'POST',
          data: {
            iconInput: iconInput,
            nameInput: nameInput,
            positionInput: positionInput,
            testimonyInput: testimonyInput,
          },
          success: function(response) {
            $('#constantTable').DataTable().ajax.reload();

            $("#iconInput").val('');
            $("#nameInput").val('');
            $("#positionInput").val('');
            $("#testimonyInput").val('');
            $('#addModal').modal('hide');

            iziToast.success({
              color: 'green',
              progressBarColor: '#0c344e',
              title: 'Added Successfully',
              message: '',
              titleColor: '#0c344e',
              messageColor: '#0c344e',
              timeout: 4000,
              overlayColor: 'rgba(0, 0, 0, 0.7)',
            });

          },
          error: function(xhr, status, error) {
            // Handle errors
            alert("An error occurred: " + error);
          }
        });
      });




      $('#constantTable').on('click', '#edit_constant', function() {
        var id = $(this).data('id');
        var icon = $(this).data('icon');
        var name = $(this).data('name');
        var position = $(this).data('position');
        var testimony = $(this).data('testimony');

        $('#editModal').modal('show');
        $('#constantId').val(id);
        $('#iconEdit').val(icon);
        $('#nameEdit').val(name);
        $('#positionEdit').val(position);
        $('#testimonyEdit').val(testimony);

      });



      $(document).on('click', '#saveEdit', function(event) {
        event.preventDefault();

        var constantId = $('#constantId').val();
        var icon = $('#iconEdit').val().trim();
        var name = $('#nameEdit').val().trim();
        var position = $('#positionEdit').val().trim();
        var testimony = $('#testimonyEdit').val().trim();

        // Validate Client Name
        if (icon === '' || name === '' || testimony === '') {
          iziToast.error({
            color: 'red',
            progressBarColor: '#0c344e',
            title: 'Error',
            message: 'fill required inputs',
            titleColor: '#0c344e',
            messageColor: '#0c344e',
            timeout: 4000,
            overlayColor: 'rgba(0, 0, 0, 0.7)',
          });
          return;
        }

        // Proceed with the AJAX request
        var formData = {
          constantId: constantId,
          icon: icon,
          name: name,
          position: position,
          testimony: testimony,
        };

        $.ajax({
          type: 'POST',
          url: 'constants_testimonials/process_edit_constant.php',
          data: formData,
          success: function(response) {
            $('#constantTable').DataTable().ajax.reload();
            iziToast.success({
              color: 'green',
              progressBarColor: '#0c344e',
              title: 'Updated Successfully',
              message: '',
              titleColor: '#0c344e',
              messageColor: '#0c344e',
              timeout: 4000,
              overlayColor: 'rgba(0, 0, 0, 0.7)',
            });
            console.log(response);
            $('#editModal').modal('hide');
          },
          error: function(xhr, status, error) {
            $('#constantTable').DataTable().ajax.reload();
            console.error(xhr.responseText);
          }
        });
      });




      $('#constantTable').on('click', '#delete_constant', function() {
        var id = $(this).data('id');

        swal({
          title: 'Confirm',
          text: 'Are you sure you want to delete this?',
          icon: 'warning',
          buttons: {
            cancel: 'NO',
            confirm: {
              text: 'YES',
              value: true,
              className: 'swal-confirm-button'
            }
          },
          dangerMode: true
        }).then((confirmed) => {
          if (confirmed) {
            $.ajax({
              url: 'constants_testimonials/process_delete_constant.php',
              type: 'POST',
              data: {
                id: id
              },
              success: function(response) {
                $('#constantTable').DataTable().ajax.reload();
              },
              error: function(xhr, status, error) {
                swal('Error', 'An error occurred while deleting.', 'error');
              }
            });
          } else {
            // If NO, do nothing
          }
        });
      });




    });
  </script>
</body>

</html>