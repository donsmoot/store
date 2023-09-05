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

});
