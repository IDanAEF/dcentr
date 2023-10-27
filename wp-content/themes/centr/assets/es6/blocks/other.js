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

    try {
        //audio
        const audioFields = document.querySelectorAll('.audio-control');

        audioFields.forEach(audio => {
            const audioBtn = audio.querySelector('.audio-btn'),
                  audioLine = audio.querySelector('.audio-line'),
                  audioLineSpan = audio.querySelector('.audio-line span'),
                  audioRecord = audio.querySelector('audio');

            audioRecord.loop = true;

            const setPlay = () => {
                audioBtn.classList.toggle('active');

                if (audioBtn.classList.contains('active')) 
                    audioRecord.play();
                if (!audioBtn.classList.contains('active'))
                    audioRecord.pause();
            }

            const getLineWidth = () => {
                return +window.getComputedStyle(audioLine).width.replace('px', '');
            }

            const getSeconds = (perc) => {
                return perc * (audioRecord.duration / 100);
            }

            const getPerc = () => {
                return audioRecord.currentTime / (audioRecord.duration / 100);
            }

            audioRecord.onloadedmetadata = function() {
                audioBtn.querySelector('.play').addEventListener('click', setPlay);
                audioBtn.querySelector('.stop').addEventListener('click', setPlay);

                audioRecord.addEventListener('timeupdate', () => {
                    audioLineSpan.style.width = getPerc()+'%';
                });

                audioLine.addEventListener('click', (e) => {
                    let lineWidth = getLineWidth(),
                        size = (lineWidth - (lineWidth - e.offsetX)) / (lineWidth / 100);
    
                    audioRecord.currentTime = getSeconds(size);
                });
            };
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default other;