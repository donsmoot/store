@extends('admin.layouts.main')
@section('title', 'Тег "'.$tag->title.'"')
@section('content')
    <main class="page-content">
        @include('admin.includes.breadcrumb')
        <div class="row">
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0"></h5>

                        </div>
                        <div class="table-responsive mt-3 ">
                            <table class="table align-middle">
                                <tbody>

                                <tr>
                                    <td>ID</td>
                                    <td>{{ $tag->id }}</td>
                                </tr>
                                <tr>
                                    <td>Наименование</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3 cursor-pointer">
                                            <div class="">
                                                <p class="mb-0">{{ $tag->title }}</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="row justify-content-between">
                            <div class="col-4">
                                <a href="{{ route('admin.tag.index')}}" class="btn btn-outline-info back_button"><i class="fadeIn animated bx bx-arrow-to-left"> </i> Назад</a>
                            </div>
                            <div class="col-4 right">
                                <div class="btn-group crud_button">
                                    <a href="{{ route('admin.tag.edit', $tag->id )}}" type="button" class="btn btn-outline-warning"><i
                                            class="fadeIn animated bx bx-edit"></i></a>
                                    <a href="#" data-title="{{ $tag->title }}" data-id="{{ route('admin.tag.delete', $tag->id) }}" class="delete_link btn btn-outline-danger"><i class="fadeIn animated bx bx-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

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
