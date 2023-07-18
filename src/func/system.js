collections = {};

function _GET(controller, data, func) {
    $.getJSON(controller, ENC(data), function (data) {
        func(CRACK_RES(data))
    })
}

function ENC(data) {
    return btoa(JSON.stringify(data))
}

function CRACK_RES(cb) {
    if (cb.status == 200) {
        return cb.data
    } else {
        console.error(cb.msg)
    }
}

function GENERATE_COLLECTIONS(table, data) {
    temp_data = {};

    $.each(data, function (k, v) {
        temp_data[k] = v;
    })

    collections[table] = temp_data;
}

function GENERATE_COLLECTIONS_ARRAY(table, data) {

    temp_data = [];

    $.each(data, function (k, v) {
        $.each(v, (key, val) => {
            temp_data.push(val)
        })
    })

    collections[table] = temp_data;
}

$(document).ready(function () {

    $('.page').each(function () {
        if ($(this).attr('attr-type') == 'main') {
            $(this).show();
        } else {
            $(this).hide();
        }
    })

})