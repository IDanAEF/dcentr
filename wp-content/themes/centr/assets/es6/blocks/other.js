const other = () => {
    const hideScroll = () => {
        document.querySelector('body').classList.add('fixed');
        document.querySelector('html').classList.add('fixed');
    }

    const showScroll = () => {
        document.querySelector('body').classList.remove('fixed');
        document.querySelector('html').classList.remove('fixed');
    }

    try {
        //elem-text animate
        const targetElem = document.querySelectorAll('.elem_animate'),
              targetText = document.querySelectorAll('.text_animate');

        targetText.forEach(item => {
            let textCont = item.textContent.trim(),
                newInner = '',
                transit = 0;

            for (let i = 0; i < textCont.length; i++) {
                newInner += `<i class="or" style="transition: 0.4s all ${transit.toFixed(2)}s">${textCont[i]}</i>`;
                transit += 0.03;
            }
            item.innerHTML = newInner;
        });

        function returnHeight() {
            return window.innerWidth <= 600 ? window.innerHeight / 1.05 : window.innerHeight / 1.2
        }

        function setAnim(mass) {
            mass.forEach(item => {
                if (returnHeight() + window.pageYOffset >= item.getBoundingClientRect().y + window.pageYOffset) {
                    item.classList.add('anim');
                }
            });
        }

        setAnim(targetElem);
        setAnim(targetText);

        window.addEventListener('scroll', () => {
            setAnim(targetElem);
            setAnim(targetText);
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        //modals
        const modalField = document.querySelector('.modal'),
              modalBodies = document.querySelectorAll('.modal__body'),
              callBtns = document.querySelectorAll('.modal-call');

        const showModal = (id) => {
            hideScroll();

            modalBodies.forEach(item => item.classList.remove('active'));
            modalField.querySelector('#'+id).classList.add('active');
            modalField.classList.add('active');
        }

        const hideModal = () => {
            showScroll();

            modalField.classList.remove('active');
            modalBodies.forEach(item => item.classList.remove('active'));
        }

        callBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                if (btn.getAttribute('data-modal')) 
                    showModal(btn.getAttribute('data-modal'));
            });
        });

        modalField.addEventListener('click', (e) => {
            if (e.target == modalField || e.target.classList.contains('modal__close'))
                hideModal();
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        //header-menu
        const hamburger = document.querySelector('.header__burger'),
              bottomMenu = document.querySelector('.header__bottom'),
              menus = document.querySelectorAll('.header__menu'),
              parents = bottomMenu.querySelectorAll('span.parent');
            
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            bottomMenu.classList.toggle('active');

            if (!hamburger.classList.contains('active')) 
                menus.forEach(item => item.classList.remove('active'));
        });

        parents.forEach(par => {
            par.addEventListener('click', () => {
                par.classList.toggle('active');
                par.nextElementSibling.classList.toggle('active');

                menus.forEach(menu => {
                    if (par.getAttribute('data-menu') == menu.getAttribute('data-menu')) 
                        menu.classList.toggle('active');
                    else menu.classList.remove('active');
                });
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default other;