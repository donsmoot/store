<div class="modal fade" id="modaldelete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <h5 class="modal-title" id="staticBackdropLabel">Вы действительно хотите удалить  ?</h5>
                <form action="" method="POST" id="form_delete" class="deleteForm">
                    @csrf
                    @method("DELETE")
                    <a href="#" data-bs-dismiss="modal" class="btn btn-outline-primary px-5 radius-30">Нет</a>
                    <button type="submit" class="btn btn-outline-danger px-5 radius-30">Да</button>
                </form>
            </div>
        </div>
    </div>
</div>
