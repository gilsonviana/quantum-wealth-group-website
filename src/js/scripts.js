const contactForm = document.getElementById('contact-form');
const collapseBtn = document.getElementById('collapse-trigger');

collapseBtn.onclick = function() {
    document.getElementById('menu-items').classList.toggle('show');
}

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
};

contactForm.onsubmit = function(e) {
    e.preventDefault();

    const reg = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    
    const { name, email, phone, message } = this.elements;        

    const data = {
        name: name.value.trim(),
        email: email.value.trim(),
        phone: phone.value,
        message: message.value.trim()
    };

    if (data.email !== '') {
        $.post('../email.php', data).done(function(data) {
            contactForm.reset();
        })
    }

};