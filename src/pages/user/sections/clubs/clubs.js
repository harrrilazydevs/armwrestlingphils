const con_product = 'src/database/controllers/products_controller.php'

$(document).ready(function () {

    payload = {
        "request_type": "get_product_category"
    }

    _GET(con_product, payload, (cb) => {
        GENERATE_COLLECTIONS_ARRAY('PRODUCT_CATEGORIES', cb)
    })

})

function GET_PRODUCT_CATEGORY() {

}

$('.ecommerce_navlink').click(function () {

    $('.ecommerce_navlink').css('color', '#b6b5b5')
    $(this).css('color', '#fff')
    $(this).addClass('shadow')

})

$('.shop_card').click(function () {
    $('.page').hide()
    $('#page_club_home').fadeToggle()

    $('body').css('background','#141516')
})