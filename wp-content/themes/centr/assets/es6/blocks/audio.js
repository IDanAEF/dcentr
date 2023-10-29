const audio = () => {
    try {
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

export default audio;