const contactForm = document.getElementById('contact-form');

const contactFormHandler = function(e) {
    e.preventDefault();

    const reg = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    const { name, email, phone, message } = this.contactForm.elements;

    if (!phone.value.match(reg)) return false;
    if (message.length > 500) return false;

    alert();

    console.log(e);
};

const navbar = document.getElementById('main-nav');

const navbarSticky = function() {
    const pos = 74;

    (window.pageYOffset >= pos) ?
        navbar.classList.add('fixed-top') :
        navbar.classList.remove('fixed-top');
};

AOS.init({
    duration: 1200,
});     

window.onscroll = function() {
    navbarSticky();
}

contactForm.onsubmit = function() {
    contactFormHandler();
}