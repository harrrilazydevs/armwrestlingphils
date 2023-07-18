<?php
include "../database.php";

function get_clubs()
{
    $q = '
            SELECT 
                *
            FROM
                tbl_clubs;
        ';

    $db = new Database();
    $res = $db->read($q);

    if (empty($res)) {
        $db->err_msg_empty();
    } else {
        echo $db->suc_msg_get($res);
    }
}

function get_club_roster()
{
    $q = '
            SELECT 
                *
            FROM
                tbl_club_members;
        ';

    $db = new Database();
    $res = $db->read($q);

    if (empty($res)) {
        $db->err_msg_empty();
    } else {
        echo $db->suc_msg_get($res);
    }
}


function get_clubpage_config()
{
    $q = '
        SELECT 
            *
        FROM
            tbl_clubpage_configuration;
    ';

    $db = new Database();
    $res = $db->read($q);

    if (empty($res)) {
        $db->err_msg_empty();
    } else {
        echo $db->suc_msg_get($res);
    }
}
