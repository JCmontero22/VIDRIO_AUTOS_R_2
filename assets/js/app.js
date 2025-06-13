function init() {
    
        document.addEventListener("DOMContentLoaded", function () {
            menuHamburguesa();
        });

        /* listarProductos(); */ 
        $("#btnCatalogo").show();
    }

    function menuHamburguesa() {
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.navbar__nav');
        const navItems = document.querySelectorAll('.navbar__item a');

        if (!hamburger || !navLinks) return;

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('activado');
        });

        navItems.forEach(item => {
            item.addEventListener('click', () => {
                navLinks.classList.remove('activado');
            });
        });
    }

function efectoServicios() {
    window.addEventListener('scroll', function() {
        const infoSection = document.querySelector('.info');
        const icons = document.querySelector('.info__icons');
        const text = document.querySelector('.info__text');
        const infoSectionTop = infoSection.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
    
        if (infoSectionTop < windowHeight) {
            icons.style.transform = 'translateX(0)';
            text.style.transform = 'translateX(0)';
        } else {
            icons.style.transform = 'translateX(-100%)';
            text.style.transform = 'translateX(100%)';
        }
    });
    
}

function efectoProductos() {
    window.addEventListener('scroll', function() {
        const productItems = document.querySelectorAll('.producto__iten');
        const windowHeight = window.innerHeight;
    
        productItems.forEach((item, index) => {
            const itemTop = item.getBoundingClientRect().top;
    
            if (itemTop < windowHeight) {
                // Delay the animation for each item
                setTimeout(() => {
                    item.classList.add('show');
                }, index * 200); // 200ms delay for each item
            } else {
                item.classList.remove('show');
            }
        });
    });
}


function whatsapp(event) {
    event.stopPropagation(); // Evita que se dispare voltearTarjeta
    const phoneNumber = '573177116506';
    const message = encodeURIComponent('Hola Fernando, te contacto desde tu pagina web Vidrio Autos R. Me gustaría saber más sobre tus servicios.');
    window.open(`https://wa.me/${phoneNumber}?text=${message}`, '_blank');
}


/* function efectoUbicacion() {
    window.addEventListener('scroll', function() {
        const ubicacionContent = document.querySelector('.content-ubicacion');
        const windowHeight = window.innerHeight;
        const ubicacionTop = ubicacionContent.getBoundingClientRect().top;
    
        if (ubicacionTop < windowHeight) {
            ubicacionContent.classList.add('show');
        } else {
            ubicacionContent.classList.remove('show');
        }
    });
    
} */
init();