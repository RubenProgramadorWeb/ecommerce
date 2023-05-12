const menuIcon = document.querySelector('.menu-icon');
const aside = document.querySelector('.aside');
const asideClose = document.querySelector('.aside_close-icon');

function toggle(el, className) {
    if (el.classList.contains(className)) {
        el.classList.remove(className);
    } else {
        el.classList.add(className);
    }
}

menuIcon.addEventListener('click', function () {
    toggle(aside, 'active');
});

asideClose.addEventListener('click', function () {
    toggle(aside, 'active');
});

// FUNCION DE CONFIRMACION ANTES DE CONTINUAR
function Confirmar(id) {
    if (confirm('Estas Seguro que deseas continuar con esta accion?')) {
        return true;
    }
    else {
        return false;
    }
}