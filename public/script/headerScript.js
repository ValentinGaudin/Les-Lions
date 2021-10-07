const navBarSlide = () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");

        // This is the nav appear and disappear

    burger.addEventListener('click',() =>{ 

        nav.classList.toggle('nav-active');
        
    });
    }
navBarSlide();