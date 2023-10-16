const other = () => {
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
}

export default other;