import Dropzone from "dropzone";

// If you are using CommonJS modules:

// If you are using an older version than Dropzone 6.0.0,
// then you need to disabled the autoDiscover behaviour here:
Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone', {
    dictCancelUploadConfirmation: 'Sube la imagen',
    acceptedFiles: ".png, .jpg, .jpeg, .gif",
    addRemoveLinks: true,
    dictRemoveFile: "Borrar archivo",
    maxFiles: 1,
    uploadMultiple: false,
    init: function(){
      
if (document.querySelector('[name="imagen"]').value.trim()){
    const imagenPublicada =  {};
    imagenPublicada.size = 1234;
    imagenPublicada.name = document.querySelector('[name="imagen"]').value;
    this.options.addedfile.call(this, imagenPublicada);
    this.options.thumbnail.call(
    this,
    imagenPublicada,
    `/uploads/${imagenPublicada.name}`
    );
    imagenPublicada.previewElement.classList.add(
    "dz-success", "dz-complete"
    );
    }

    }

})

dropzone.on("success", function(file, response){

    console.log(response.imagen)
    document.querySelector('[name="imagen"]').value = response.imagen

})


dropzone.on('removedfile', function(){
    document.querySelector('[name="imagen"]').value = ''

})