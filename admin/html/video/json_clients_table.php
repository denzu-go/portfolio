<?php
include "../../../database/connection.php";
$json = array();

$sql = "SELECT * FROM video_clients";
$result = $conn->query($sql);

$number = 1;

while ($fetched = $result->fetch_assoc()) {
    $client_id = $fetched['client_id'];
    $client_name = $fetched['client_name'];
    $is_visible = $fetched['is_visible'];
    $date_added = $fetched['date_added'];

    // status
    if ($is_visible == 1) {
        $status = '
            <span class="badge bg-primary rounded-3 fw-semibold">visible</span>
        ';
    } else {
        $status = '
            <span class="badge bg-danger rounded-3 fw-semibold">not visible</span>
        ';
    }


    $show_client_id = '
        <td class="border-bottom-0">
            <h6 class="fw-semibold mb-0 small">' . $client_id . '</h6>
        </td>
    ';

    $show_client_name = '
        <td class="border-bottom-0">
            <span class="small fw-semibold mb-1 d-inline-block text-truncate" style="max-width: 140px;" data-toggle="tooltip" data-placement="top" title="'.$client_name.'">' . $client_name . '</span>
        </td>
    ';

    $show_status = '
        <td class="border-bottom-0">
            ' . $status . '
        </td>
    ';

    $show_actions = '
        <i id="edit_client" class="fas fa-pen btn text-secondary p-2 m-0" data-client_id="' . $client_id . '" data-client_name="' . $client_name . '" data-is_visible="' . $is_visible . '"></i>
        <i id="delete_client" data-client_id="' . $client_id . '" class="fas fa-trash btn text-danger p-2 m-0"></i>
    ';


    $show_number = '
        <td class="border-bottom-0">
            <h6 class="fw-semibold mb-0 small">' . $number++ . '</h6>
        </td>
    ';
    

    $json[] = array(
        "number" => $show_number,
        "id" => $show_client_id,
        "client_name" => $show_client_name,
        "status" => $show_status,
        "actions" => $show_actions,
    );
}
echo json_encode($json);
