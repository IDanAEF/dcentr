const gallery = () => {
    try {
        const galleryField = document.querySelectorAll('.gallery'),
              galleryOverlay = document.querySelector('.gallery__overlay'),
              galleryBlock = document.querySelector('.gallery__overlay-block');

        galleryField.forEach(gallery => {
            let galleryTrack = gallery.querySelector('.gallery-track'),
                slides = gallery.querySelectorAll('.gallery-item'),
                slideWidth = 0,
                galleryIndex = 0,
                slideIndex = 0,
                slidesCount = slides.length;

            let galleryImage = document.createElement('img');
            galleryImage.classList.add('gallery__overlay-image');
            galleryBlock.append(galleryImage);

            const getVisCount = () => {
                if (window.innerWidth <= 576 && gallery.getAttribute('data-mob-vis')) {
                    return +gallery.getAttribute('data-mob-vis');
                } else if (window.innerWidth <= 768 && gallery.getAttribute('data-tablet-vis')) {
                    return +gallery.getAttribute('data-tablet-vis');
                } else if (window.innerWidth <= 1200 && gallery.getAttribute('data-lap-vis')) {
                    return +gallery.getAttribute('data-lap-vis');
                } else if (gallery.getAttribute('data-pc-vis')) {
                    return +gallery.getAttribute('data-pc-vis');
                } 

                return 1;
            };

            const setImage = () => {
                galleryImage.src = slides[galleryIndex].getAttribute('data-full');
            }

            const slide = () => {
                galleryTrack.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
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
                //slideWidth = slides[0].offsetWidth + +window.getComputedStyle(galleryTrack).gridColumnGap.replace('px', '');
                slideWidth = slides[0].offsetWidth + +window.getComputedStyle(slides[0]).marginRight.replace('px', '');
            }

            galleryTrack.style.transition = 'transform 1.5s ease 0s';

            setSlideWidth();

            slides.forEach((item, i) => {
                item.addEventListener('click', () => {
                    galleryIndex = i;
                    setImage();
                    galleryOverlay.classList.add('active');
                });
            });

            galleryOverlay.addEventListener('click', (e) => {
                if (e.target == galleryOverlay) {
                    galleryImage.src = '';
                    galleryOverlay.classList.remove('active');
                }
            });

            let startPos = 0,
                time = 2500,
                interval = setInterval(moveRight, time);
        
            gallery.addEventListener('touchstart', (e) => {
                startPos = e.changedTouches[0].screenX;
            });
        
            gallery.addEventListener('touchend', (e) => {
                clearInterval(interval);
                if (startPos - e.changedTouches[0].screenX > 50) {
                    moveRight();
                } else if (startPos - e.changedTouches[0].screenX < -50) {
                    moveLeft();
                }
                interval = setInterval(moveRight, time);
            });

            window.addEventListener("resize", () => {
                setSlideWidth();
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default gallery;