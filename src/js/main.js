import "./slider";
import resize from './modules/bgresize';
import header from './modules/header';
import modal from './modules/modal';
import mask from './modules/mask';
import checkTextInputs from './modules/checkTextinput';

window.addEventListener('DOMContentLoaded', ()=>{
    header();
    resize();
    modal({
        modalSelector: '.modal-contact',
        triggerSelector: '[data-modal-contact]'
    });
    mask('[data-number]');
    checkTextInputs('[data-text]');
});