$( document ).ready(function() {
    $( ".delete_link" ).on( "click", function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let title =$(this).data('title');
        let ModalDelete = new bootstrap.Modal(document.getElementById('modaldelete'));
        $('#form_delete').attr('action', id);
        $('.modal-title').text('Вы действительно хотите удалить "'+ title +'" ?')
        ModalDelete.show();
        console.log(id,title);
    } );



    $('#summernote').summernote({
        placeholder: '',
        tabsize: 2,
        height: 280,
        lang: 'ru-RU',
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ],
        popover: {
            image: [
                ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                ['float', ['floatLeft', 'floatRight', 'floatNone']],
                ['remove', ['removeMedia']]
            ],
            link: [
                ['link', ['linkDialogShow', 'unlink']]
            ],
            table: [
                ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
                ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
            ],
            air: [
                ['color', ['color']],
                ['font', ['bold', 'underline', 'clear']],
                ['para', ['ul', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture']]
            ]
        }

    });
});
