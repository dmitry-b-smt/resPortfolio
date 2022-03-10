"use strict"

// --------------------SLIDER-SWIPER----------------------
const swiper = new Swiper('.works__slider', {
    loop: true,
    navigation: {
        nextEl: '.slider__button-next',
        prevEl: '.slider__button-previous',
    },

    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
    },

    grabCursor: true,

    slidesPerView: 1,

    spaceBetween: 50,

    centeredSlides: true,
})


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

const menuLogo = document.querySelector('.menu__logo');
const skillsLinks = document.querySelectorAll('[data-section="skills"]');
const aboutLinks = document.querySelectorAll('[data-section="about"]');
const worksLinks = document.querySelectorAll('[data-section="works"]');
const blogLinks = document.querySelectorAll('[data-section="blog"]');
const contactsLinks = document.querySelectorAll('[data-section="contacts"]');

const homeSection = document.querySelector('.header');
const skillsSection = document.querySelector('.person');
const aboutSection = document.querySelector('.about');
const worksSection = document.querySelector('.works');
const blogSection = document.querySelector('.blog');
const contactsSection = document.querySelector('.footer');





// function listenClick(links, section) {
//     for (let link of links) {
//         scrollTo(link, section);
//     };
// };

// const scrollTo = (link, section) => link.addEventListener('click', function (e) {
//     e.preventDefault();
//     section.scrollIntoView({
//         behavior: 'smooth',
//     });
// });



menuLogo.addEventListener('click', function (e) {
    e.preventDefault();
    homeSection.scrollIntoView({
        behavior: 'smooth',
    });
});

skillsLinks.forEach(function (item) {
    item.addEventListener('click', function (e) {
        e.preventDefault();
        skillsSection.scrollIntoView({
            behavior: 'smooth',
        });
    })
});

aboutLinks.forEach(function (item) {
    item.addEventListener('click', function (e) {
        e.preventDefault();
        aboutSection.scrollIntoView({
            behavior: 'smooth',
        });
    })
});

worksLinks.forEach(function (item) {
    item.addEventListener('click', function (e) {
        e.preventDefault();
        worksSection.scrollIntoView({
            behavior: 'smooth',
        });
    })
});

blogLinks.forEach(function (item) {
    item.addEventListener('click', function (e) {
        e.preventDefault();
        blogSection.scrollIntoView({
            behavior: 'smooth',
        });
    })
});

contactsLinks.forEach(function (item) {
    item.addEventListener('click', function (e) {
        e.preventDefault();
        contactsSection.scrollIntoView({
            behavior: 'smooth',
        });
    })
});

// ----------------------------CONTACT FORM--------------------------------

const contactForm = document.querySelector('.contact-form__container');
console.log(contactForm);
const inputFields = contactForm.querySelectorAll('.form__field');
console.log(inputFields);

inputFields.forEach(function (item) {
    let itemPlaceholder = item.placeholder;
    item.addEventListener('focus', function (e) {
        item.placeholder = '';
        item.classList.add('form__field-active');
    })
    item.addEventListener('blur', function (e) {
        item.placeholder = itemPlaceholder;
        item.classList.remove('form__field-active');
    })
})
