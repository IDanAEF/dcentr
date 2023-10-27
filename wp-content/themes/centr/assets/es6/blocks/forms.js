const forms = () => {
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
        const forms = document.querySelectorAll('form');

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
                    const succesField = form.querySelector('.success');

                    if (succesField) succesField.style.display = 'block';

                    setTimeout(() => {
                        succesField.style.display = '';
                    }, 4000);
                });
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default forms;