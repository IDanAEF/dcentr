import mask from "./blocks/mask";
import forms from "./blocks/forms";
import gallery from "./blocks/gallery";
import scrolling from "./blocks/scrolling";
import reviews from "./blocks/reviews";
import simpleSlider from "./blocks/simpleSlider";
import audio from "./blocks/audio";
import other from "./blocks/other";

'use strict';

window.addEventListener('DOMContentLoaded', () => {
    mask('input[type="tel"]');
    forms();
    gallery();
    scrolling();
    reviews();
    simpleSlider();
    audio();
    other();
});