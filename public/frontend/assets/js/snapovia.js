window.addEventListener('cart-updated', event => {
    let el = document.getElementById('mini-cart-item-count');
    el.setAttribute('data-cart-items', event.detail.count);
});

window.addEventListener('show-minicart', event => {
    document.getElementById('mini-cart-item-count').click();
});

window.addEventListener('remove-cart-notification', event => {
    setTimeout(()=>{
        document.querySelector('.alert .close').click();
    },5000)
});

