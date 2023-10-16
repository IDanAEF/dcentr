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
}

export default forms;