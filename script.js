document.addEventListener('DOMContentLoaded', function () {
    const toggleNavbarButton = document.getElementById('toggleNavbar');
    const navbar = document.querySelector('.navbar');

    toggleNavbarButton.addEventListener('click', function () {
        document.body.classList.toggle('navbar-active');
    });
});
