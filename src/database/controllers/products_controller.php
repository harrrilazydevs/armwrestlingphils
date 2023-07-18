<?php
session_start();

include_once __DIR__ . "/../models/products_model.php";
include_once __DIR__ . "/../database.php";

$db = new Database();
$option = $db->VALIDATE_REQUEST($_POST, $_GET);

if ($option == "get_product_category") {
    get_product_category();
} else {
    echo json_encode(
        [
            'status' => 400,
            'msg' => 'Bad request.',
            'data' => []
        ]
    );
    exit;
}
