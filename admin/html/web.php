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
        <h5 class="card-title fw-semibold">Web & UI/UX</h5>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="mb-4">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title fw-semibold">Clients</h5>
                    </div>
                    <div class="col text-end">
                      <button class="btn btn-primary" id="add_client">Add Client</button>
                    </div>
                  </div>
                </div>

                <table id="clientsTable" class="display" style="width: 100%;">
                  <thead class="text-dark fs-4">
                    <tr>
                      <!-- <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0 small">#</h6>
                      </th> -->
                      <!-- <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0 small">ID</h6>
                      </th> -->
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0" style="min-width: 170px;">Category / Client</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Status</h6>
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

          <div class="col-lg-7 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="mb-4">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title fw-semibold">Outputs</h5>
                    </div>
                    <div class="col text-end">
                      <button class="btn btn-primary" id="add_output">Add Output</button>
                    </div>
                  </div>
                </div>

                <table id="outputsTable" class="display" style="width: 100%;">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0 small" style="min-width: 170px;">Category / Client</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0" style="min-width: 170px;">Embedded Link</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Status</h6>
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

  <!-- edit client -->
  <div class="modal fade" id="editClientModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" id="clientModalBody">
        <div class="modal-header pb-0">
          <h5 class="modal-title">Edit Client ID: </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form id="editClientForm" onsubmit="return false;">
            <input type="hidden" id="clientId">
            <div class="mb-3">
              <label for="clientName" class="form-label">Client Name</label>
              <input type="text" class="form-control" id="clientName" required>
            </div>
            <div class="mb-3">
              <label for="editDate" class="form-label">Edit Date</label>
              <input type="date" class="form-control" id="date_added_client">
              <em>
                <p class="small text-muted font-italic" id="modal-subtitle">the sorting is based on the date (latest appearing at the top)</p>
              </em>
            </div>
            <div class="mb-3 form-check form-switch">
              <input type="checkbox" class="form-check-input" id="clientVisibility">
              <label class="form-check-label" for="clientVisibility">Client Visibility</label>
            </div>



            <button type="button" class="btn btn-primary" id="saveEditClient">Save Changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>



  <!-- Add Client Modal -->
  <div class="modal fade" id="addClientModal" tabindex="-1" role="dialog" aria-labelledby="addClientModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addClientModalLabel">Add Client</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Add client form -->
          <form id="addClientForm" onsubmit="return false;">
            <div class="mb-3">
              <label for="newClientName" class="form-label">Client Name</label>
              <input type="text" class="form-control" id="newClientName" required>
            </div>
            <div class="mb-3 form-check form-switch">
              <input type="checkbox" class="form-check-input" id="newClientVisibility" checked>
              <label class="form-check-label" for="newClientVisibility">Client Visibility</label>
            </div>
            <button type="button" class="btn btn-primary" id="saveNewClient">Save Client</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO: -->


  <!-- Add Output Modal -->
  <div class="modal fade" id="addOutputModal" tabindex="-1" role="dialog" aria-labelledby="addOutputModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addOutputModalLabel">Add Output</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Add client form -->
          <form id="addOutputForm" onsubmit="return false;">

            <div class="mb-3">
              <label for="clientSelect" class="form-label">Select Client:</label>
              <table id="dropdown_client_table" class="display" style="width: 100%;">
                <tbody>
                </tbody>
              </table>
            </div>

            <div class="mb-3">
              <label for="linkInput" class="form-label">Link:</label>
              <textarea type="text" class="form-control" id="linkInput" required></textarea>
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
            <div class="mb-3 form-check form-switch">
              <input type="checkbox" class="form-check-input" id="newOutputVisibility" checked>
              <label class="form-check-label" for="newClientVisibility">Output Visibility</label>
            </div>
            <button type="submit" class="btn btn-primary" id="addOutput">Submit</button>
          </form>

        </div>
      </div>
    </div>
  </div>



  <!-- edit output -->
  <div class="modal fade" id="editOutputModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" id="outputModalBody">
        <div class="modal-header pb-0">
          <h5 class="modal-title">Edit Output: </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form id="editOutputForm" onsubmit="return false;">
            <input type="hidden" id="outputId">
            <input type="hidden" id="outputClientId">
            <div class="mb-3">
              <label for="link" class="form-label">Link</label>
              <textarea type="text" class="form-control" id="link" required></textarea>
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
              <label for="clientSelect" class="form-label">Select Client:</label>
              <table id="dropdown_output_table" class="display" style="width: 100%;">
                <tbody>
                </tbody>
              </table>
            </div>

            <div class="mb-3">
              <label for="editDate" class="form-label">Edit Date</label>
              <input type="date" class="form-control" id="date_added_output">
              <em>
                <p class="small text-muted font-italic" id="modal-subtitle">the sorting is based on the date (latest appearing at the top)</p>
              </em>
            </div>

            <div class="mb-3 form-check form-switch">
              <input type="checkbox" class="form-check-input" id="outputVisibility">
              <label class="form-check-label" for="outputVisibility">Output Visibility</label>
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

      $("#add_client").click(function() {
        $('#addClientModal').modal('show');
      });

      $("#saveNewClient").click(function() {
        // Collect form data
        var clientName = $("#newClientName").val();
        var clientVisibility = $("#newClientVisibility").prop('checked') ? 1 : 0;

        // Validate Client Name
        if (clientName === '') {
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

        // Send form data to process_add_client.php using AJAX
        $.ajax({
          url: 'web/process_add_client.php',
          type: 'POST',
          data: {
            clientName: clientName,
            clientVisibility: clientVisibility
          },
          success: function(response) {
            $('#clientsTable').DataTable().ajax.reload();
            $('#outputsTable').DataTable().ajax.reload();
            $('#dropdown_client_table').DataTable().ajax.reload();

            $('#newClientName').val('');
            $('#newClientVisibility').val('');
            $('#addClientModal').modal('hide');
          },
          error: function(xhr, status, error) {
            // Handle errors
            alert("An error occurred: " + error);
          }
        });
      });



      $('#clientsTable').DataTable({
        searching: true,
        info: false,
        paging: false,
        ordering: false,
        responsive: true, // Enable responsiveness
        scrollX: true,
        ajax: {
          url: "web/json_clients_table.php",
          data: {},
          dataSrc: ""
        },
        columnDefs: [{
          targets: [0, 1], // Apply to the first and second column (number and id)
          className: "text-center", // Center-align the content
          width: "2px" // Set the width of the columns
        }],
        columns: [
          // {
          //     data: "number"
          // },
          // {
          //   data: "id"
          // },
          {
            data: "client_name",
            className: "text-center"
          },
          {
            data: "status",
            className: "text-center"
          },
          {
            data: "actions",
            className: "text-center"
          },
        ]
      });


      $('#clientsTable').on('click', '#edit_client', function() {
        var client_id = $(this).data('client_id');
        var client_name = $(this).data('client_name');
        var is_visible = $(this).data('is_visible');
        var date_added_client = $(this).data('date_added');

        // Extract only the date part from the datetime string
        var date_added_client_parts = date_added_client.split(' ');
        var date_client_only = date_added_client_parts[0];

        $('#editClientModal').modal('show');

        $('#clientId').val(client_id);
        $('#clientName').val(client_name);
        $('#clientVisibility').prop('checked', is_visible === 1);

        // Set the value of the date input to the extracted date
        $('#date_added_client').val(date_client_only);
      });


      $('#clientsTable').on('click', '#delete_client', function() {
        var client_id = $(this).data('client_id');

        swal({
          title: 'Confirm',
          text: 'Are you sure you want to delete this client?',
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
              url: 'web/process_delete_client.php',
              type: 'POST',
              data: {
                client_id: client_id
              },
              success: function(response) {
                $('#clientsTable').DataTable().ajax.reload();
                $('#outputsTable').DataTable().ajax.reload();
                $('#dropdown_client_table').DataTable().ajax.reload();
              },
              error: function(xhr, status, error) {
                swal('Error', 'An error occurred while deleting the client.', 'error');
              }
            });
          } else {
            // If NO, do nothing
          }
        });
      });




      $(document).on('click', '#saveEditClient', function(event) {
        event.preventDefault();

        var clientId = $('#clientId').val();
        var clientName = $('#clientName').val().trim();
        var clientVisibility = ($('#clientVisibility').prop('checked')) ? 1 : 0;
        var date_added_client = $('#date_added_client').val();

        // Validate Client Name
        if (clientName === '') {
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
          clientId: clientId,
          clientName: clientName,
          clientVisibility: clientVisibility,
          date_added_client: date_added_client,
        };

        $.ajax({
          type: 'POST',
          url: 'web/process_edit_client.php',
          data: formData,
          success: function(response) {
            $('#clientsTable').DataTable().ajax.reload();
            $('#outputsTable').DataTable().ajax.reload();
            $('#dropdown_client_table').DataTable().ajax.reload();
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
            $('#editClientModal').modal('hide');
          },
          error: function(xhr, status, error) {
            $('#clientsTable').DataTable().ajax.reload();
            $('#outputsTable').DataTable().ajax.reload();
            $('#dropdown_client_table').DataTable().ajax.reload();
            console.error(xhr.responseText);
          }
        });
      });







      // TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:TODO:


      $('#outputsTable').DataTable({
        searching: true,
        info: false,
        paging: false,
        ordering: false,
        responsive: true,
        scrollX: true,
        ajax: {
          url: "web/json_outputs_table.php",
          data: {},
          dataSrc: ""
        },
        columnDefs: [{
          targets: [0, 1], // Apply to the first and second column (number and id)
          className: "text-center", // Center-align the content
          width: "2px" // Set the width of the columns
        }],
        columns: [
          // {
          //     data: "number"
          // },
          {
            data: "id"
          },
          {
            data: "link",
            className: "text-center"
          },
          {
            data: "status",
            className: "text-center"
          },
          {
            data: "actions",
            className: "text-center"
          },
        ]
      });


      $("#add_output").click(function() {
        $('#addOutputModal').modal('show');
      });

      $('#dropdown_client_table').DataTable({
        searching: false,
        info: false,
        paging: false,
        ordering: false,
        responsive: false,
        scrollX: false,
        ajax: {
          url: "web/dropdown_client_table.php",
          data: {},
          dataSrc: ""
        },
        columns: [{
          data: "content",
        }, ]
      });

      $("#addOutput").click(function() {
        // Collect form data
        var linkInput = $("#linkInput").val();
        var newOutputVisibility = $("#newOutputVisibility").prop('checked') ? 1 : 0; // Convert boolean to integer
        var editClientSelect = $("#editClientSelect").val();

        // Validate Client Name
        if (linkInput === '') {
          iziToast.error({
            color: 'red',
            progressBarColor: '#0c344e',
            title: 'Error',
            message: 'Link is required.',
            titleColor: '#0c344e',
            messageColor: '#0c344e',
            timeout: 4000,
            overlayColor: 'rgba(0, 0, 0, 0.7)',
          });
          return;
        }

        // Send form data to process_add_client.php using AJAX
        $.ajax({
          url: 'web/process_add_output.php',
          type: 'POST',
          data: {
            linkInput: linkInput,
            newOutputVisibility: newOutputVisibility,
            editClientSelect: editClientSelect
          },
          success: function(response) {
            $('#clientsTable').DataTable().ajax.reload();
            $('#outputsTable').DataTable().ajax.reload();
            $('#dropdown_client_table').DataTable().ajax.reload();

            $("#linkInput").val('');
            $("#newOutputVisibility").prop('checked', true);
            $("#clientSelect").val('');
            $('#addOutputModal').modal('hide');

            iziToast.success({
              color: 'green',
              progressBarColor: '#0c344e',
              title: 'Output Added Successfully',
              message: '',
              titleColor: '#0c344e',
              messageColor: '#0c344e',
              timeout: 4000,
              overlayColor: 'rgba(0, 0, 0, 0.7)',
            });

            $('#newClientName').val('');
            $('#newClientVisibility').val('');
            $('#addClientModal').modal('hide');
          },
          error: function(xhr, status, error) {
            // Handle errors
            alert("An error occurred: " + error);
          }
        });
      });












      var selectedClient = 0;

      $('#outputsTable').on('click', '#edit_output', function() {
        var output_id = $(this).data('output_id');
        var link = $(this).data('link');
        var is_visible = $(this).data('is_visible');
        var date_added_output = $(this).data('date_added');
        var output_client_id = $(this).data('client_id');

        // Extract only the date part from the datetime string
        var date_added_output_parts = date_added_output.split(' ');
        var date_output_only = date_added_output_parts[0];

        $('#editOutputModal').modal('show');
        $('#outputId').val(output_id);

        $('#link').val(link);
        $('#outputVisibility').prop('checked', is_visible === 1);

        // Set the value of the date input to the extracted date
        $('#date_added_output').val(date_output_only);

        selectedClient = output_client_id;

        // DataTable initialization
        $('#dropdown_output_table').DataTable({
          destroy: true,
          searching: false,
          info: false,
          paging: false,
          ordering: false,
          responsive: false,
          scrollX: false,
          ajax: {
            url: "web/dropdown_output_table.php",
            data: {
              selectedClient: selectedClient // Pass selectedClient to the server
            },
            dataSrc: ""
          },
          columns: [{
            data: "content",
          }]
        });
      });



      $(document).on('click', '#saveEditOutput', function(event) {
        event.preventDefault();

        var outputId = $('#outputId').val();
        var link = $('#link').val().trim();
        var outputVisibility = ($('#outputVisibility').prop('checked')) ? 1 : 0;
        var date_added_output = $('#date_added_output').val();
        var clientSelect = $("#clientSelect").val();

        // Validate Client Name
        if (link === '') {
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
          outputId: outputId,
          link: link,
          outputVisibility: outputVisibility,
          date_added_output: date_added_output,
          clientSelect: clientSelect,
        };

        $.ajax({
          type: 'POST',
          url: 'web/process_edit_output.php',
          data: formData,
          success: function(response) {
            $('#clientsTable').DataTable().ajax.reload();
            $('#outputsTable').DataTable().ajax.reload();
            $('#dropdown_client_table').DataTable().ajax.reload();
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
            $('#editOutputModal').modal('hide');
          },
          error: function(xhr, status, error) {
            $('#clientsTable').DataTable().ajax.reload();
            $('#outputsTable').DataTable().ajax.reload();
            $('#dropdown_client_table').DataTable().ajax.reload();
            console.error(xhr.responseText);
          }
        });
      });




      $('#outputsTable').on('click', '#delete_output', function() {
        var output_id = $(this).data('output_id');

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
              url: 'web/process_delete_output.php',
              type: 'POST',
              data: {
                output_id: output_id
              },
              success: function(response) {
                $('#clientsTable').DataTable().ajax.reload();
                $('#outputsTable').DataTable().ajax.reload();
                $('#dropdown_client_table').DataTable().ajax.reload();
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