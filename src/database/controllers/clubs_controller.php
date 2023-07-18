<?php
session_start();

include_once __DIR__ . "/../models/clubs_model.php";
include_once __DIR__ . "/../database.php";

$db = new Database();
$option = $db->VALIDATE_REQUEST($_POST, $_GET);

if ($option == "get_clubs") {
    get_clubs();
} else if ($option == "get_club_roster") {
    get_club_roster();
}else if ($option == "get_clubpage_config") {
    get_clubpage_config();
}


else {
    echo json_encode(
        [
            'status' => 400,
            'msg' => 'Bad request.',
            'data' => []
        ]
    );
    exit;
}
