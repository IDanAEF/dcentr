const simpleSlider = () => {
    try {
        const sliderField = document.querySelectorAll('.slider');

        sliderField.forEach(slider => {
            let sliderTrack = slider.querySelector('.slider-track'),
                sliderList = slider.querySelector('.slider-list'),
                slides = slider.querySelectorAll('.slider-item'),
                sliderRight = slider.querySelector('.slider-right'),
                sliderLeft = slider.querySelector('.slider-left'),
                slideWidth = 0,
                slideIndex = 0,
                slidesCount = slides.length;

            const getVisCount = () => {
                if (window.innerWidth <= 576 && slider.getAttribute('data-mob-vis')) {
                    return +slider.getAttribute('data-mob-vis');
                } else if (window.innerWidth <= 768 && slider.getAttribute('data-tablet-vis')) {
                    return +slider.getAttribute('data-tablet-vis');
                } else if (window.innerWidth <= 1200 && slider.getAttribute('data-lap-vis')) {
                    return +slider.getAttribute('data-lap-vis');
                } else if (slider.getAttribute('data-pc-vis')) {
                    return +slider.getAttribute('data-pc-vis');
                } 

                return 1;
            };

            const slide = () => {
                if (slideIndex == 0) sliderLeft.classList.add('off');
                else sliderLeft.classList.remove('off');

                if (slideIndex == slidesCount - 1) sliderRight.classList.add('off');
                else sliderRight.classList.remove('off');

                sliderTrack.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
            }

            const moveRight = () => {
                slideIndex + getVisCount() >= slidesCount ? slideIndex = 0 : slideIndex++;
                slide();
            }

            const moveLeft = () => {
                slideIndex <= 0 ? slideIndex = slidesCount - getVisCount() : slideIndex--;
                slide();
            }

            const setSlideWidth = () => {
                slideWidth = slides[0].offsetWidth + +window.getComputedStyle(slides[0]).marginRight.replace('px', '');
            }

            sliderTrack.style.transition = 'transform 0.5s ease 0s';

            setSlideWidth();
            slide();

            let startPos = 0;
        
            sliderList.addEventListener('touchstart', (e) => {
                if (slider.classList.contains('mobile-only') && window.innerWidth > 576) return;

                startPos = e.changedTouches[0].screenX;
            });
        
            sliderList.addEventListener('touchend', (e) => {
                if (slider.classList.contains('mobile-only') && window.innerWidth > 576) return;

                if (startPos - e.changedTouches[0].screenX > 50) {
                    moveRight();
                } else if (startPos - e.changedTouches[0].screenX < -50) {
                    moveLeft();
                }
            });

            sliderRight && sliderRight.addEventListener('click', moveRight);
            sliderLeft && sliderLeft.addEventListener('click', moveLeft);

            window.addEventListener("resize", () => {
                setSlideWidth();
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default simpleSlider;