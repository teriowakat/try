// Custom JavaScript for interactive features
    document.addEventListener('DOMContentLoaded', function() {
    const featureCards = document.querySelectorAll('#features .card');
    featureCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            card.classList.add('shadow-lg', 'border-success');
        });
        card.addEventListener('mouseleave', function() {
            card.classList.remove('shadow-lg', 'border-success');
        });
    });

// Enlarge navbar buttons and links on hover
    const navbarButtonsAndLinks = document.querySelectorAll(
        '.navbar-nav .btn, .navbar-nav .nav-link:not(.navbar-brand)'
    );
    navbarButtonsAndLinks.forEach(el => {
        el.addEventListener('mouseenter', function() {
            if (el.classList.contains('btn')) {
                el.style.transform = 'scale(1.08)';
                el.style.transition = 'transform 0.2s';
            }
        });
        el.addEventListener('mouseleave', function() {
            if (el.classList.contains('btn')) {
                el.style.transform = '';
            }
        });
    });



// Enlarge all <a> tags on hover
    const allLinks = document.querySelectorAll('a:not(.navbar-brand)');
    allLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            link.style.transform = 'scale(1.08)';
            link.style.transition = 'transform 0.2s';
        });
        link.addEventListener('mouseleave', function() {
            link.style.transform = '';
            link.style.color = '';
        });
    });
});


    // ====== Password Validation ======
    const registerForm = document.querySelector('form[action="/register"]');
    if (registerForm) {
        registerForm.addEventListener('submit', function (e) {
            const password = registerForm.querySelector('input[name="password"]');
            const confirmPassword = registerForm.querySelector('input[name="password_confirmation"]');

            // Check minimum length
            if (password.value.length < 8) {
                e.preventDefault();
                alert('Password must be at least 8 characters long.');
                return;
            }

            // Check if passwords match
            if (password.value !== confirmPassword.value) {
                e.preventDefault();
                alert('Password and Confirm Password do not match.');
            }
        });
    }
