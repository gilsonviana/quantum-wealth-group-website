var stickyNavbar = function() {
    var nav = document.getElementById('main-nav'),
        sticky = 74;

    (window.pageYOffset >= sticky) ?
        nav.classList.add('fixed-top') :
        nav.classList.remove('fixed-top');
};

window.onscroll = function() {
    stickyNavbar()
};

AOS.init({
    duration: 1200,
});

// document.addEventListener('scroll', stickyNavbar);