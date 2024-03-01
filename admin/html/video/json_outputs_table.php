<?php
include "../../../database/connection.php";
$json = array();

$sql = "SELECT * FROM video_outputs ORDER BY date_added DESC";
$result = $conn->query($sql);

$number = 1;

while ($fetched = $result->fetch_assoc()) {
    $output_id = $fetched['id'];

    $link = $fetched['link'];
    // $link = $conn->real_escape_string($link);
    $link =   htmlspecialchars($link);

    $is_portrait = $fetched['is_portrait'];
    $is_visible = $fetched['is_visible'];
    $date_added = $fetched['date_added'];
    $client_id = $fetched['client_id'];

    $client_name = "missing";
    $getClient = "SELECT * FROM video_clients WHERE client_id = $client_id";
    $resultGetClient = $conn->query($getClient);
    while ($fetchedResultGetClient = $resultGetClient->fetch_assoc()) {
        $client_name = $fetchedResultGetClient['client_name'];
    }

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

    if ($is_portrait == 1) {
        $add_icon = '
        <i class="fa-solid fa-mobile-screen-button"></i>
        ';
    } else {
        $add_icon = '
        <i class="fa-solid fa-panorama"></i>
        ';
    }


    if ($client_id == 0) {
        $show_client_id = '
            <td class="border-bottom-0">
                '.$add_icon.' <h6 class="fw-semibold mb-0 small ellipsis" data-toggle="tooltip" title="N/A">N/A</h6>
            </td>
        ';
    } else {
        $show_client_id = '
            <td class="border-bottom-0">
                '.$add_icon.' <h6 class="fw-semibold mb-0 ellipsis small" data-toggle="tooltip" title="' . $client_name . '">' . $client_name . '</h6>
            </td>
        ';
    }


    $show_status = '
        <td class="border-bottom-0">
            ' . $status . '
        </td>
    ';

    $show_actions = '
        <i id="edit_output" class="fas fa-pen btn text-secondary p-2 m-0" data-output_id="' . $output_id . '" data-link="' . $link . '" data-is_portrait="' . $is_portrait . '" data-is_visible="' . $is_visible . '" data-date_added="' . $date_added . '" data-client_id="' . $client_id . '"></i>
        
        <i id="delete_output" data-output_id="' . $output_id . '" class="fas fa-trash btn text-danger p-2 m-0"></i>
    ';


    $show_number = '
        <td class="border-bottom-0">
            <h6 class="fw-semibold mb-0 small">' . $number++ . '</h6>
        </td>
    ';

    $show_link = '
        <span class="small ellipsis" data-toggle="tooltip" title="' . $link . '">' . $link . '</span>
    ';


    $json[] = array(
        "number" => $show_number,
        "id" => $show_client_id,
        "link" => $show_link,
        "status" => $show_status,
        "actions" => $show_actions,
    );
}
echo json_encode($json);
