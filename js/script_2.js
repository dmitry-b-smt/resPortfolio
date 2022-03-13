"use strict"

// -----------------------HEADER--------------------------
const headerMenu = document.querySelector('.header');
const headerMenuItems = headerMenu.querySelectorAll('.menu__link');
const headerLogo = document.querySelector('.menu__logo');

headerMenuItems.forEach(function (item, i) {
    let index = i;
    item.setAttribute('data-menuindex', index);
});

headerLogo.addEventListener('click', function (e) {
    headerMenuItems.forEach(function (item) {
        item.classList.remove('menu__link-active');
    });
    headerLogo.classList.add('menu__logo-active');
});

headerMenuItems.forEach(function (item) {
    item.addEventListener('click', function (e) {
        var currentActiveItem = headerMenu.querySelector('.menu__link-active');
        if (currentActiveItem !== null) {
            currentActiveItem.classList.remove('menu__link-active');
            item.classList.add('menu__link-active');
        } else {
            item.classList.add('menu__link-active');
        }
        headerLogo.classList.remove('menu__logo-active');
    })
});

const burgerButton = document.querySelector('.menu__burger-button');
const burgerContainer = document.querySelector('.header__burger-container');

burgerButton.addEventListener('click', function (e) {
    burgerContainer.classList.remove('header__burger-container-default');
    burgerContainer.classList.toggle('header__burger-container-active');
});

burgerContainer.addEventListener('click', function (e) {
    let target = e.target;
    if (target.classList.contains('header__burger-container') || target.classList.contains('burger__close')) {
        burgerContainer.classList.remove('header__burger-container-active');
        burgerContainer.classList.add('header__burger-container-default');
    };
});

let scrollpos = window.scrollY

const menuRow = document.querySelector('.header__menu-container');
const scrollChange = 37;

const add_class_on_scroll = () => menuRow.classList.add("header__menu-container-active")
const remove_class_on_scroll = () => menuRow.classList.remove("header__menu-container-active")
const add_blur_class_on_return = () => menuRow.classList.add("header__menu-container-default")
const remove_blur_class_on_return = () => menuRow.classList.remove("header__menu-container-default")

window.addEventListener('scroll', function () {
    scrollpos = window.scrollY;

    if (scrollpos >= scrollChange) {
        add_class_on_scroll();
        remove_blur_class_on_return();
    }
    else {
        remove_class_on_scroll();
        add_blur_class_on_return();
    }

});


// ----------------------------SCROLL TO--------------------------------

const contactsLinks = document.querySelectorAll('[data-section="contacts"]');

const contactsSection = document.querySelector('.footer');


contactsLinks.forEach(function (item) {
    item.addEventListener('click', function (e) {
        e.preventDefault();
        contactsSection.scrollIntoView({
            behavior: 'smooth',
        });
    })
});


// ----------------------------LANG SWITCH----------------------------------

const langButtonsContainer = document.querySelector('.menu__lang-switcher');
const langBurgerButtonsContainer = document.querySelector('.burger__lang-switcher');
const langButtonEn = langButtonsContainer.querySelector('[value="en"]');
const langButtonRu = langButtonsContainer.querySelector('[value="ru"]');
const langBurgerButtonEn = langBurgerButtonsContainer.querySelector('[value="en"]');
const langBurgerButtonRu = langBurgerButtonsContainer.querySelector('[value="ru"]');
const textEn = document.querySelectorAll('.text-en');
const textRu = document.querySelectorAll('.text-ru');

if (langButtonEn.checked && langBurgerButtonEn) {
    textEn.forEach(function (item) {
        item.style.display = "block";
    });
    textRu.forEach(function (item) {
        item.style.display = "none";
    });
}

if (langButtonRu.checked && langBurgerButtonRu) {
    textEn.forEach(function (item) {
        item.style.display = "none";
    });
    textRu.forEach(function (item) {
        item.style.display = "block";
    });
}

langButtonEn.addEventListener('click', function (e) {
    if (langButtonEn.checked) {
        langBurgerButtonEn.checked = "true";
        textEn.forEach(function (item) {
            item.style.display = "block";
        });
        langBurgerButtonRu.removeAttribute("checked");
        textRu.forEach(function (item) {
            item.style.display = "none";
        });
    }
});

langButtonRu.addEventListener('click', function (e) {
    if (langButtonRu.checked) {
        langBurgerButtonEn.removeAttribute("checked");
        textEn.forEach(function (item) {
            item.style.display = "none";
        });
        langBurgerButtonRu.checked = "true";
        textRu.forEach(function (item) {
            item.style.display = "block";
        });
    }
});

langBurgerButtonEn.addEventListener('click', function (e) {
    if (langBurgerButtonEn.checked) {
        langButtonEn.checked = "true";
        textEn.forEach(function (item) {
            item.style.display = "block";
        });
        langButtonRu.removeAttribute("checked");
        textRu.forEach(function (item) {
            item.style.display = "none";
        });
    }
});

langBurgerButtonRu.addEventListener('click', function (e) {
    if (langBurgerButtonRu.checked) {
        langButtonEn.removeAttribute("checked");
        textEn.forEach(function (item) {
            item.style.display = "none";
        });
        langButtonRu.checked = "true";
        textRu.forEach(function (item) {
            item.style.display = "block";
        });
    }
});