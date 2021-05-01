//////////Menu lateral

function navSlide() {
    const navbarh = document.querySelector(".navbarh");
    const nav = document.querySelector(".navbar");
    const navLinks = document.querySelectorAll(".navbar li");
    
    navbarh.addEventListener("click", () => {
        //Nav
        nav.classList.toggle("nav-active");
        
        //Animacion
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = ""
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
            }
        });
        //navbarA
        navbarh.classList.toggle("toggle");
    });
    
}

navSlide();


//////////////////////////////////////////////////
