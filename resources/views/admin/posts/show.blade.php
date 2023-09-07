@extends('admin.layouts.main')
@section('title', 'Пост "'.$post->title.'"')
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
                                    <td>{{ $post->id }}</td>
                                </tr>
                                <tr>
                                    <td>Наименование</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3 cursor-pointer">
                                            <div class="">
                                                <p class="mb-0">{{ $post->title }}</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="row justify-content-between">
                            <div class="col-4">
                                <a href="{{ route('admin.post.index')}}" class="btn btn-outline-info back_button"><i class="fadeIn animated bx bx-arrow-to-left"> </i> Назад</a>
                            </div>
                            <div class="col-4 right">
                                <div class="btn-group crud_button">
                                    <a href="{{ route('admin.post.edit', $post->id )}}" type="button" class="btn btn-outline-warning"><i
                                            class="fadeIn animated bx bx-edit"></i></a>
                                    <a href="#" data-title="{{ $post->title }}" data-id="{{ route('admin.category.delete', $post->id) }}" class="delete_link btn btn-outline-danger"><i class="fadeIn animated bx bx-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    @include('admin.includes.modal_delete')
@endsection
