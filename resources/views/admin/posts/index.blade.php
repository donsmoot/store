@extends('admin.layouts.main')
@section('title', 'Посты')
@section('content')
    <main class="page-content">
        @include('admin.includes.breadcrumb')
        <div class="col-12 mb-3">
            <a href="{{ route('admin.post.create') }}" class="btn btn-outline-primary px-5 radius-30 icn-btn"><div class="parent-icon"><i class="fadeIn animated bx bx-plus-circle"> </i></div><div class="menu-title"> Добавить</div></a>
        </div>
        <div class="card col-6">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0"></h5>

                </div>
                <div class="table-responsive mt-3 ">
                    <table class="table align-middle">
                        <thead class="table-secondary">
                        <tr>
                            <th>#</th>
                            <th>Наименование</th>
                            <th>Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                        <div class="">
                                            <p class="mb-0">{{ $post->title }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="{{ route('admin.post.show', $post->id )}}" class="text-primary"><i class="bi bi-eye-fill"></i></a>
                                        <a href="{{ route('admin.post.edit', $post->id )}}" class="text-warning"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="#" data-title="{{ $post->title }}" data-id="{{ route('admin.post.delete', $post->id) }}" class="text-danger delete_link" ><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
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
                        <button type="submit" class="btn btn-outline-danger px-5 radius-30">Да</button>
                        <a href="#" data-bs-dismiss="modal" class="btn btn-outline-primary px-5 radius-30">Нет</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
