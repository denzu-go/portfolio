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
    max-width: 270px;
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
                      <h5 class="card-title fw-semibold">Home</h5>
                    </div>
                  </div>
                </div>

                <table id="constantsTable" class="display" style="width: 100%;">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0 small">Category</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Text</h6>
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

  <!-- edit output -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" id="outputModalBody">
        <div class="modal-header pb-0">
          <h5 class="modal-title" id="modal-title"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form id="editOutputForm" onsubmit="return false;">
            <input type="hidden" id="constantId">
            <input type="hidden" id="outputClientId">
            <div class="mb-3">
              <input type="text" class="form-control" id="text" required>
              <em>
                <p class="small text-muted font-italic" id="modal-subtitle"></p>
              </em>
            </div>


            <button type="button" class="btn btn-primary" id="saveEditOutput">Save Changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>





  <?php include 'global/scripts.php'; ?>

  <script>
    $(document).ready(function() {

      $('#constantsTable').DataTable({
        searching: true,
        info: false,
        paging: false,
        ordering: false,
        responsive: true,
        scrollX: true,
        ajax: {
          url: "constants_footer/json_constants_table.php",
          data: {},
          dataSrc: ""
        },
        columnDefs: [{
            targets: [0], // Apply to the first and second column (id and link)
            className: "text-center", // Center-align the content
            width: "15%" // Set the width of the columns
          },
          {
            targets: [1], // Apply to the first and second column (id and link)
            className: "text-center", // Center-align the content
            width: "80%" // Set the width of the columns
          },
          {
            targets: -1, // Apply to the last column (actions)
            className: "text-center", // Center-align the content
            width: "5%" // Set the width of the actions column
          }
        ],
        columns: [{
            data: "title"
          },
          {
            data: "text",
            className: "text-center"
          },
          {
            data: "actions",
            className: "text-center"
          },
        ]
      });


      $('#constantsTable').on('click', '#edit_constant', function() {
        var id = $(this).data('id');
        var title = $(this).data('title');
        var text = $(this).data('text');

        $('#constantId').val(id);

        $('#title').val(title);
        $('#editModal').find('#modal-title').text('Edit ' + title);

        $('#text').val(text);

        $('#editModal').modal('show');
      });




      $(document).on('click', '#saveEditOutput', function(event) {
        event.preventDefault();

        var id = $('#constantId').val();
        var text = $('#text').val().trim();

        // Validate Client Name
        if (text === '') {
          iziToast.error({
            color: 'red',
            progressBarColor: '#0c344e',
            title: 'Error',
            message: 'Client Name is required.',
            titleColor: '#0c344e',
            messageColor: '#0c344e',
            timeout: 4000,
            overlayColor: 'rgba(0, 0, 0, 0.7)',
          });
          return;
        }

        // Proceed with the AJAX request
        var formData = {
          id: id,
          text: text,
        };

        $.ajax({
          type: 'POST',
          url: 'constants_footer/process_edit_constant.php',
          data: formData,
          success: function(response) {
            $('#constantsTable').DataTable().ajax.reload();
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
            $('#constantsTable').DataTable().ajax.reload();
            console.error(xhr.responseText);
          }
        });
      });




  



    });
  </script>
</body>

</html>