//////////////////////////////// Bouton Retour haut
window.addEventListener('scroll', function () {
    let retour_haut_btn = document.getElementById("retour_haut_btn");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        retour_haut_btn.style.display = "block";
    } else {
        retour_haut_btn.style.display = "none";
    }
});

// Scroll to the top of the page
function RetourHaut() {
    //document.body.scrollTop = 0; // For Safari
    //document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    window.scrollTo({
        top: 0,
        behavior: 'smooth' //transition douce
    })
}


//////////////////////////////// Menu Burgers
document.addEventListener('DOMContentLoaded', function () {
    const burgerMenu = document.querySelector('.burger');
    const navLinks = document.querySelector('.navbar-links');

    burgerMenu.addEventListener('click', function () {
        navLinks.classList.toggle('active');
        if (navLinks.classList.contains('active')) {
            setTimeout(() => {
                navLinks.classList.add('show');
            }, 10); // Add a slight delay to ensure the active class is applied first
        } else {
            navLinks.classList.remove('show');
        }
    });
});