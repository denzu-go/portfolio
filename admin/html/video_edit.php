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
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0 small">ID</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0" style="min-width: 120px;">Client Name</h6>
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
                      <h5 class="card-title fw-semibold">Clients</h5>
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
                        <h6 class="fw-semibold mb-0 small">Client</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0" style="min-width: 270px;">Link</h6>
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
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
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
            <div class="mb-3 form-check form-switch">
              <input type="checkbox" class="form-check-input" id="clientVisibility">
              <label class="form-check-label" for="clientVisibility">Client Visibility</label>
            </div>

            <button type="button" class="btn btn-primary" id="saveEditClient">Save Changess</button>
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
              <input type="text" class="form-control" id="linkInput" required>
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





  <?php include 'global/scripts.php'; ?>

  <script>
    $(document).ready(function() {

      $("#add_client").click(function() {
        $('#addClientModal').modal('show');
      });

      $("#saveNewClient").click(function() {
        // Collect form data
        var clientName = $("#newClientName").val();
        var clientVisibility = $("#newClientVisibility").prop('checked') ? 1 : 0; // Convert boolean to integer

        // Send form data to process_add_client.php using AJAX
        $.ajax({
          url: 'video/process_add_client.php',
          type: 'POST',
          data: {
            clientName: clientName,
            clientVisibility: clientVisibility
          },
          success: function(response) {
            $('#clientsTable').DataTable().ajax.reload();
            $('#outputsTable').DataTable().ajax.reload();
            $('#dropdown_client_table').DataTable().ajax.reload();
            iziToast.success({
              color: 'green',
              progressBarColor: '#0c344e',
              title: 'Client Details Added Successfully',
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



      $('#clientsTable').DataTable({
        searching: true,
        info: false,
        paging: false,
        ordering: false,
        responsive: true, // Enable responsiveness
        scrollX: true,
        ajax: {
          url: "video/json_clients_table.php",
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
        $('#editClientModal').modal('show');

        $('#clientId').val(client_id);
        $('#clientName').val(client_name);
        $('#clientVisibility').prop('checked', is_visible === 1);

      });

      $('#clientsTable').on('click', '#delete_client', function() {
        var client_id = $(this).data('client_id');

        iziToast.question({
          timeout: false,
          close: false,
          overlay: true,
          displayMode: 'once',
          id: 'question',
          zindex: 999,
          title: 'Confirm',
          message: 'Are you sure you want to delete this client?',
          position: 'center',
          buttons: [
            ['<button><b>YES</b></button>', function(instance, toast) {
              instance.hide({
                transitionOut: 'fadeOut'
              }, toast, 'button');
              // If YES, proceed with AJAX request
              $.ajax({
                url: 'video/process_delete_client.php',
                type: 'POST',
                data: {
                  client_id: client_id
                },
              });

              $('#clientsTable').DataTable().ajax.reload();
              $('#outputsTable').DataTable().ajax.reload();
              $('#dropdown_client_table').DataTable().ajax.reload();

              iziToast.success({
                color: 'green',
                progressBarColor: '#0c344e',
                title: 'Client Details Updated Successfully',
                message: '',
                titleColor: '#0c344e',
                messageColor: '#0c344e',
                timeout: 4000,
                overlayColor: 'rgba(0, 0, 0, 0.7)',
              });
            }],
            ['<button>NO</button>', function(instance, toast) {
              instance.hide({
                transitionOut: 'fadeOut'
              }, toast, 'button');
              // If NO, do nothing
            }]
          ]
        });

      });



      $(document).on('click', '#saveEditClient', function(event) {
        event.preventDefault();

        var clientId = $('#clientId').val();
        var clientName = $('#clientName').val().trim(); // Trim leading and trailing spaces
        var clientVisibility = ($('#clientVisibility').prop('checked')) ? 1 : 0;

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
        };

        $.ajax({
          type: 'POST',
          url: 'video/process_edit_client.php',
          data: formData,
          success: function(response) {
            $('#clientsTable').DataTable().ajax.reload();
            $('#outputsTable').DataTable().ajax.reload();
            $('#dropdown_client_table').DataTable().ajax.reload();
            iziToast.success({
              color: 'green',
              progressBarColor: '#0c344e',
              title: 'Client Details Updated Successfully',
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
          url: "video/json_outputs_table.php",
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
          url: "video/dropdown_client_table.php",
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
        var clientSelect = $("#clientSelect").val();

        // Send form data to process_add_client.php using AJAX
        $.ajax({
          url: 'video/process_add_output.php',
          type: 'POST',
          data: {
            linkInput: linkInput,
            newOutputVisibility: newOutputVisibility,
            clientSelect: clientSelect
          },
          success: function(response) {
            $('#clientsTable').DataTable().ajax.reload();
            $('#outputsTable').DataTable().ajax.reload();
            $('#dropdown_client_table').DataTable().ajax.reload();
            iziToast.success({
              color: 'green',
              progressBarColor: '#0c344e',
              title: 'Client Details Added Successfully',
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



    });
  </script>
</body>

</html>