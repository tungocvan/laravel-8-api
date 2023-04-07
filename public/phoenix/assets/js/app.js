document.addEventListener('DOMContentLoaded', function(event) {
    let main = document.querySelector('main');
    let navLinkLabel = document.querySelectorAll('.nav-link');
    let footerRight = document.querySelector('.navbar-vertical-footer')
    let thunho = document.querySelector('#thunho')

    thunho.addEventListener('click',function(){
        
        main.classList.toggle('navbar-vertical-collapsed')
        footerRight.classList.toggle('footer-border-right')
        
    })
    navLinkLabel.forEach((item) => {
        item.style.paddingLeft = 0;
    })
});