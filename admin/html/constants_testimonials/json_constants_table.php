<?php
include "../../../database/connection.php";
$json = array();

$sql = "SELECT * FROM constants_testimonials";
$result = $conn->query($sql);


while ($fetched = $result->fetch_assoc()) {
    $id = $fetched['id'];
    $icon = $fetched['icon'];
    $name = $fetched['name'];
    $position = $fetched['position'];
    $testimony = $fetched['testimony'];

    $show_icon = '
    <span class="small ellipsis" data-toggle="tooltip" title="' . $icon . '">' . $icon . '</span>
    ';

    $show_name = '
    <span class="small ellipsis" data-toggle="tooltip" title="' . $name . '">' . $name . '</span>
    ';

    $show_position = '
    <span class="small ellipsis" data-toggle="tooltip" title="' . $position . '">' . $position . '</span>
    ';
    $show_testimony = '
    <span class="small ellipsis" data-toggle="tooltip" title="' . $testimony . '">' . $testimony . '</span>
    ';

    $show_actions = '
        <i id="edit_constant" class="fas fa-pen btn text-secondary p-2 m-0" data-id="' . $id . '" data-icon="' . $icon . '" data-name="' . $name . '" data-position="' . $position . '" data-testimony="' . $testimony . '">
        </i>
        
        <i id="delete_constant" data-id="' . $id . '" class="fas fa-trash btn text-danger p-2 m-0"></i>
    ';


    $json[] = array(
        "icon" => $show_icon,
        "name" => $show_name,
        "position" => $show_position,
        "testimony" => $show_testimony,
        "actions" => $show_actions,
    );
}
echo json_encode($json);
