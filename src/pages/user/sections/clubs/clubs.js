const con_clubs = 'src/database/controllers/clubs_controller.php'

$(document).ready(function () {

    // payload = {
    //     "request_type": "get_clubs"
    // }

    // _GET(con_clubs, payload, (cb) => {
    //     // GENERATE_COLLECTIONS_ARRAY('PRODUCT_CATEGORIES', cb)
    //     // console.log(cb)
    // })

    payload = {
        "request_type": "get_club_roster"
    }

    _GET(con_clubs, payload, (cb) => {

        output = '';

        $.each(cb, function (k, v) {
            output += `
                <tr>
                    <td>`+ v.name + `</td>
                    <td>`+ v.position + `</td>
                </tr>
            
            `;
        })

        $('#tbl_club_roster tbody').empty().append(output)


    })

    payload = {
        "request_type": "get_clubs"
    }

    _GET(con_clubs, payload, (cb) => {
        output = '';
        $.each(cb, (k, v) => {
            output += `
                <div class="col-4 mx-0">
                    <div class="shop_card p-2 pb-0">
                        <div class="text-center">
                            <img src="`+ v.img + `" height="165px" width="60%" alt="">
                        </div>
                        <p class="item_title">`+ v.name + `</p>
                    </div>
                </div>
            `;
        })
        $('#card_collection_clubs').empty().append(output)
    })









})

function GET_PRODUCT_CATEGORY() {

}

$('.ecommerce_navlink').click(function () {

    $('.ecommerce_navlink').css('color', '#b6b5b5')
    $(this).css('color', '#fff')
    $(this).addClass('shadow')

})

$('.club_card').click(function () {
    $('.page').hide()
    $('#page_club_home').fadeToggle()


    payload = {
        "request_type": "get_clubpage_config"
    }

    _GET(con_clubs, payload, (cb) => {
        console.log(cb)

        $.each(cb, (k, v) => {
            $('body').css('background',v.background)
            $('body').css('color',v.color)
            $('.item_title').css('color',v.color)

        })

    })


})

$('#btn_view_roster').click(function () {
    $('.page').hide();
    $('#page_club_roster').fadeToggle()
})
