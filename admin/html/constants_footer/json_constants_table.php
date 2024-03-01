<?php
include "../../../database/connection.php";
$json = array();

$sql = "SELECT * FROM constants_footer";
$result = $conn->query($sql);


while ($fetched = $result->fetch_assoc()) {
    $id = $fetched['id'];
    $title = $fetched['title'];

    $text = $fetched['text'];
    $text =   htmlspecialchars($text);

    $show_title = '
    <span class="small ellipsis" data-toggle="tooltip" title="' . $title . '">' . $title . '</span>
    ';


    $show_text = '
    <span class="small ellipsis" data-toggle="tooltip" title="' . $text . '">' . $text . '</span>
    ';

    $show_actions = '
        <i id="edit_constant" class="fas fa-pen btn text-secondary p-2 m-0" data-id="' . $id . '" data-title="' . $title . '"  data-text="' . $text . '">
        </i>
    ';


    $json[] = array(
        "title" => $show_title,
        "text" => $show_text,
        "actions" => $show_actions,
    );
}
echo json_encode($json);
