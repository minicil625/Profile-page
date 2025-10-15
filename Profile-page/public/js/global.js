// Responsive Navbar Toggle
const menuToggle = document.querySelector('.menu-toggle');
const navLinks = document.querySelector('.nav-links');

if (menuToggle) {
    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('open');
    });
}

// Highlight current page
document.querySelectorAll('.nav-links a').forEach(link => {
    if (link.href === window.location.href) {
        link.classList.add('active');
    }
});
