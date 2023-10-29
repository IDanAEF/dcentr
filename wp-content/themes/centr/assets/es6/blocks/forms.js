const forms = () => {
    const hideScroll = () => {
        document.querySelector('body').classList.add('fixed');
        document.querySelector('html').classList.add('fixed');
    }

    const showScroll = () => {
        document.querySelector('body').classList.remove('fixed');
        document.querySelector('html').classList.remove('fixed');
    }

    async function postData(url, data) {
        let res = await fetch(url, {
            method: "POST",
            body: data
        });

        return await res.text();
    }

    try {
        //checkbox
        const checkField = document.querySelectorAll('.checkbox');

        checkField.forEach(field => {
            const fieldInput = field.querySelector('input');

            fieldInput.checked ? field.classList.add('active') : '';

            fieldInput.addEventListener('change', () => {
                field.classList.toggle('active');
            });
        });
    } catch (e) {
        console.log(e.stack);        
    }

    try {
        //forms 
        const forms = document.querySelectorAll('form'),
              modalField = document.querySelector('.modal'),
              modalSuccess = document.querySelector('#modal__success'),
              modalBodies = document.querySelectorAll('.modal__body');

        forms.forEach(form => {
            const inputs = form.querySelectorAll('input');

            inputs.forEach(input => {
                input.addEventListener('focus', () => {
                    input.classList.add('focus');
                });
                input.addEventListener('blur', () => {
                    input.classList.remove('focus');
                });
            });

            form.addEventListener('submit', (e) => {
                e.preventDefault();

                const formData = new FormData(form);

                postData(form.action, formData)
                .then((res) => {
                    hideScroll();

                    modalBodies.forEach(item => item.classList.remove('active'));
                    modalSuccess.classList.add('active');
                    modalField.classList.add('active');
                });
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default forms;