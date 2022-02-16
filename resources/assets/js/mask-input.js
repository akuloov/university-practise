import MaskInput from 'mask-input';

const maskInput = new MaskInput(document.querySelector('.feedback__tel-input'), {
    mask: '+38 (000) 00 - 00 - 000',
    alwaysShowMask: true,
    maskChar: '_',
});
