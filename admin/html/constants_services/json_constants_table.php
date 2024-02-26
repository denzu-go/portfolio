<?php
include "../../../database/connection.php";
$json = array();

$sql = "SELECT * FROM constants_services";
$result = $conn->query($sql);


while ($fetched = $result->fetch_assoc()) {
    $id = $fetched['id'];
    $icon = $fetched['icon'];
    $instruction = $fetched['instruction'];
    $title = $fetched['title'];
    $text = $fetched['text'];
    $link = $fetched['link'];

    $show_icon = '
    <span class="small ellipsis" data-toggle="tooltip" title="' . $icon . '">' . $icon . '</span>
    ';

    $show_title = '
    <span class="small ellipsis" data-toggle="tooltip" title="' . $title . '">' . $title . '</span>
    ';

    $show_text = '
    <span class="small ellipsis" data-toggle="tooltip" title="' . $text . '">' . $text . '</span>
    ';

    $show_actions = '
        <i id="edit_constant" class="fas fa-pen btn text-secondary p-2 m-0" data-id="' . $id . '" data-title="' . $title . '" data-instruction="' . $instruction . '" data-text="' . $text . '" data-link="' . $link . '">
        </i>
        
        <i id="delete_constant" data-id="' . $id . '" class="fas fa-trash btn text-danger p-2 m-0"></i>
    ';


    $json[] = array(
        "icon" => $show_icon,
        "title" => $show_title,
        "text" => $show_text,
        "actions" => $show_actions,
    );
}
echo json_encode($json);
