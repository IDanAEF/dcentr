const forms = () => {
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
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default forms;