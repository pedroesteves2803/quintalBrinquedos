document.addEventListener('DOMContentLoaded', function() {
    const phoneInput = document.getElementById('phone');

    const phoneMask = new Inputmask('(99) 99999-9999', {
        placeholder: ' ',
        showMaskOnHover: false,
        showMaskOnFocus: false
    });

    phoneMask.mask(phoneInput);
});
