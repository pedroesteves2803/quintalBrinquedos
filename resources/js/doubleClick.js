document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('form-contact');
    const submitBtn = document.getElementById('submitBtn');

    form.addEventListener('submit', function() {
        console.log('teste')
        submitBtn.disabled = true;
    });
});
