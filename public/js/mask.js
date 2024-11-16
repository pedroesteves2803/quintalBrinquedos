document.addEventListener('DOMContentLoaded', function() {
    const phoneInput = document.getElementById('phone');

    console.log('Swiper instance created');


    const phoneMask = new Inputmask('(99) 99999-9999', {
        placeholder: ' ',
        showMaskOnHover: false,
        showMaskOnFocus: false
    });

    phoneMask.mask(phoneInput);
});
