<?php
include "../database.php";

function get_product_category()
{
    $q = '
            SELECT 
                DISTINCT type
            FROM
                tbl_products;
        ';

    $db = new Database();
    $res = $db->read($q);

    if (empty($res)) {
        $db->err_msg_empty();
    } else {
        echo $db->suc_msg_get($res);
    }
}
