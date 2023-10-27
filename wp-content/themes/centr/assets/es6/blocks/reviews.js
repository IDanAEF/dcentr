const reviews = () => {
    try {
        const reviewsSlider = document.querySelectorAll('.main__reviews-slider');

        reviewsSlider.forEach(slider => {
            const sliderItems = slider.querySelectorAll('.main__reviews-slider-track .review'),
                  sliderRight = slider.querySelector('.main__reviews-slider-arrows img.right'),
                  sliderLeft = slider.querySelector('.main__reviews-slider-arrows img.left');

            let index = 0,
                count = sliderItems.length;

            const moveSlider = (offset = 0) => {
                index += offset;
                sliderItems.forEach(item => item.className = 'review');

                if (index == 0) sliderLeft.classList.add('off');
                else sliderLeft.classList.remove('off');

                if (index == count - 1) sliderRight.classList.add('off');
                else sliderRight.classList.remove('off');

                for(let i = 0; i < 5; i++) {
                    if (sliderItems[index + i])
                        sliderItems[index + i].className = 'review r'+i;
                }
            }

            moveSlider();

            sliderRight.addEventListener('click', () => {
                moveSlider(1);
            });
            sliderLeft.addEventListener('click', () => {
                moveSlider(-1);
            });

            let startPos = 0;
        
            slider.addEventListener('touchstart', (e) => {
                startPos = e.changedTouches[0].screenX;
            });
        
            slider.addEventListener('touchend', (e) => {
                if (startPos - e.changedTouches[0].screenX > 50 && index != count - 1) 
                    moveSlider(1);
                else if (startPos - e.changedTouches[0].screenX < -50 && index !== 0) 
                    moveSlider(-1);
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default reviews;