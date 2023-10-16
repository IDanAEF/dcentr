import mask from "./blocks/mask";
import forms from "./blocks/forms";
import other from "./blocks/other";

'use strict';

window.addEventListener('DOMContentLoaded', () => {
    mask('input[type="tel"]');
    forms();
    other();
});