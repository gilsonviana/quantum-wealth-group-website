const contactForm = document.getElementById('contact-form');
contactForm.onsubmit = function(e) {
    e.preventDefault();
};

var stickyNavbar = function() {
    var nav = document.getElementById('main-nav'),
        sticky = 74;

    (window.pageYOffset >= sticky) ?
        nav.classList.add('fixed-top') :
        nav.classList.remove('fixed-top');
};

window.onload = function() {
    var frontpage = document.getElementById('frontpage'),
        imgs = ["url('../src/imgs/1_banner_pic_darker.jpg')", "url('../src/imgs/2_banner_pic_darker.jpg')", "url('../src/imgs/3_banner_pic_darker.jpg')"];
}

window.onscroll = function() {
    stickyNavbar()
};

AOS.init({
    duration: 1200,
});