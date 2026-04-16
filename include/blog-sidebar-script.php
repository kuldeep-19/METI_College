<script>
    document.querySelectorAll('.js-blog-subscribe-form').forEach((form) => {
        const emailInput = form.querySelector('.js-blog-subscribe-email');
        const status = form.querySelector('.js-blog-subscribe-status');

        if (!emailInput || !status) {
            return;
        }

        form.addEventListener('submit', (e) => {
            e.preventDefault();

            if (!emailInput.checkValidity()) {
                status.textContent = 'Please enter a valid email address.';
                status.classList.add('error');
                status.classList.remove('success');
                emailInput.focus();
                return;
            }

            status.textContent = 'Thanks for subscribing. We will keep you updated.';
            status.classList.add('success');
            status.classList.remove('error');
            form.reset();
        });
    });
</script>
