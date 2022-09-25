import './bootstrap';
import Dropzone from 'dropzone';

Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: 'Sube aqui tu imagen',
    acceptedFiles: ".png, .jpg, .jpeg, .gif",
    addRemoveLinks: true,
    dictRemoveFile: 'Borrar Archivo',
    maxFiles: 1,
    uploadMultiple: false,

    init: function() {
        //console.log(document.querySelector('[name="imagen"]').value.trim().length);
        if(document.querySelector('[name="imagen"]').value.trim().length > 1){
            const imagenPublicada = {};
            imagenPublicada.size = 1234;
            imagenPublicada.name = document.querySelector('[name="imagen"]').value.trim();
            this.options.addedfile.call(this, imagenPublicada);
            this.options.thumbnail.call(this, imagenPublicada, `/uploads/${imagenPublicada.name}`);

            imagenPublicada.previewElement.classList.add('dz-success', 'dz-complete');
        }
    }
});

dropzone.on('sending', function(file, xhr, formData) {
    // console.log(file);
    // console.log(formData);
})

dropzone.on('success', function(file, response) {
    //console.log(response);
    document.querySelector('[name="imagen"]').value = response.imagen;
})

dropzone.on('error', function(file, message) {
    // console.log(message);
})

dropzone.on('removedFile', function() {
    // console.log("Archivo eliminado");
    document.querySelector('[name="imagen"]').value = "";
})