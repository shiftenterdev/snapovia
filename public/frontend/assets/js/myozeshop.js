$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

let loadingShow = function () {
    $('.loading').show();
};
let loadingHide = function () {
    $('.loading').hide()
};

let body = $('body');

let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

function delay(callback, ms) {
    let timer = 0;
    return function () {
        let context = this, args = arguments;
        clearTimeout(timer);
        timer = setTimeout(function () {
            callback.apply(context, args);
        }, ms || 0);
    };
}

$("input.integer").bind("change keyup input", function () {
    var position = this.selectionStart - 1;
    //remove all but number and .
    var fixed = this.value.replace(/[^0-9]/g, '');

    if (this.value !== fixed) {
        this.value = fixed;
        this.selectionStart = position;
        this.selectionEnd = position;
    }
});

$("input.decimal").bind("change keyup input", function () {
    var position = this.selectionStart - 1;
    //remove all but number and .
    var fixed = this.value.replace(/[^0-9\.]/g, '');
    if (fixed.charAt(0) === '.')                  //can't start with .
        fixed = fixed.slice(1);

    var pos = fixed.indexOf(".") + 1;
    if (pos >= 0)               //avoid more than one .
        fixed = fixed.substr(0, pos) + fixed.slice(pos).replace('.', '');

    if (this.value !== fixed) {
        this.value = fixed;
        this.selectionStart = position;
        this.selectionEnd = position;
    }
});

let lazyLoading = function () {
    $(".lazy-image-loading").each(function (index) {
        let this_image = this;
        let src = $(this_image).attr('src');
        let lsrc = $(this_image).attr('data-src');
        // console.log(lsrc);
        if (lsrc.length > 0) {
            var img = new Image();
            $(img).on("load", function () {
                this_image.src = this.src;
            });
            img.src = lsrc;
        } else {
            this_image.src = src;
        }
    });
};
// lazyLoading();

// Add to cart section
let productSku = $('#productSku').val();
let parentSku = productSku;
let productType = $('#productTypeId').val();
// let productQuantity = $('#productQty').val();

$('#addToCartForm').on('submit', function (e) {
    e.preventDefault();
    loadingShow();

    $.post('/checkout/cart', {
        sku: productSku,
        qty: $('#productQty').val(),
        product_type: productType,
        parent_sku: parentSku
    }, r => {
        if (r === 'SUCCESS') {
            // showNotification($('.product_name').text(), true);
        } else if (r === 'FAILED') {
            // showNotification($('.product_name').text(), false);
        }
        updateMiniCart();
        loadingHide();
    });
});

let updateMiniCart = function () {

    fetch('/checkout/mini-cart')
        .then(response => response.text())
        .then(data => {
            $('mini-cart').html(data);
            if ($('.mini-cart-count').length) {
                $('#mini-cart-item-count').attr('data-cart-items', $('.mini-cart-count').data('count'));
            } else {
                $('#mini-cart-item-count').attr('data-cart-items', '0');
            }
            // feather.replace();
            loadingHide();
            // $('mini-cart').removeClass('progress');
        });
};


$(() => {
    loadingHide();
    //updateMiniCart();
});

body.on('click', '.remove_from_cart', function () {
    if (window.confirm("Are you want to remove?")) {
        // $('mini-cart').addClass('progress');
        loadingShow();
        let itemId = $(this).data('item-id');
        $.post('/cart/remove-item', {cart_item_id: itemId}, function () {
            if ($('.cart-page-list').length) {
                location.reload();
            } else {
                updateMiniCart();
            }
        });
    }
});

body.on('change', '.mc-c-item-qty', function () {
    // $('mini-cart .modal-body').addClass('progress');
    loadingShow();
    // $('mini-cart').addClass('progress');
    let itemId = $(this).data('item-id');
    let qty = $(this).val();
    $.post('/cart/update-item', {cart_item_id: itemId, quantity: qty}, function () {
        if ($('.cart-page-list').length) {
            location.reload();
        } else {
            updateMiniCart();
        }
    });
});