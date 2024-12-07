import './bootstrap';
import 'flowbite';
import { Modal } from 'flowbite';
/*
* $targetEl: required
* options: optional
*/
// set the modal menu element
const $targetEl = document.getElementById('modalEl');

var reportTitle = document.getElementById("reportTitle").innerHTML;

// options with default values
const optionss = {
    placement: 'center',
    backdrop: 'dynamic',
    backdropClasses:
        'bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40',
    closable: false,
    onHide: () => {
    },
    onShow: () => {
    },
    onToggle: () => {
    },
};

// instance options object
const instanceOptions = {
id: 'modalEl',
override: true
};

const modal = new Modal($targetEl, optionss, instanceOptions);

let btn = document.getElementById('btn');
const pages = document.getElementsByClassName('page');

btn.addEventListener('click', function(){
    html2PDF(pages, {
        jsPDF: {
            unit: "mm",
            format: [210, 330]
        },
        html2canvas: {
            // scale: 100
        },
        imageType: 'image/jpeg',
        output: reportTitle + '.pdf',
        init: function() {
            modal.show();
        },
        success: function(pdf) {
            modal.hide();
            pdf.save(this.output);
        }

    });
});

