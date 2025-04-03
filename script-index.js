document.addEventListener('scroll', function () {
    const sections = document.querySelectorAll('.section');
    const windowHeight = window.innerHeight;

    sections.forEach(section => {
        const sectionTop = section.getBoundingClientRect().top;

        if (sectionTop < windowHeight - 150) {
            section.classList.add('visible');
        } else {
            section.classList.remove('visible');
        }
    });
});

const scrollToTopButton = document.createElement('button');
scrollToTopButton.innerText = '↑';
scrollToTopButton.classList.add('scroll-to-top');
document.body.appendChild(scrollToTopButton);

window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        scrollToTopButton.style.display = 'block';
    } else {
        scrollToTopButton.style.display = 'none';
    }
});

scrollToTopButton.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});
const projectLinks = document.querySelectorAll('.project a');
projectLinks.forEach(link => {
    link.addEventListener('mouseenter', () => {
        link.style.transform = 'scale(1.1)';
        link.style.transition = 'transform 0.3s ease';
    });
    link.addEventListener('mouseleave', () => {
        link.style.transform = 'scale(1)';
    });
});
const form = document.querySelector('form');
form.addEventListener('submit', function(event) {
    const nameField = document.getElementById('name-field');
    const emailField = document.getElementById('email-field');
    const messageField = document.getElementById('message-field');

    if (!nameField.value || !emailField.value || !messageField.value) {
        alert('Veuillez remplir tous les champs avant de soumettre.');
        event.preventDefault();
    }
});
const navLinks = document.querySelectorAll('nav a');
navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetSection = document.getElementById(targetId);

        window.scrollTo({
            top: targetSection.offsetTop - 60, // Ajuste le décalage si nécessaire
            behavior: 'smooth'
        });
    });
});