@extends('admin.layouts.main')
@section('title', 'Теги')
@section('content')
    <main class="page-content">
        @include('admin.includes.breadcrumb')
        <div class="col-12 mb-3">
            <a href="{{ route('admin.tag.create') }}" class="btn btn-outline-primary px-5 radius-30 icn-btn"><div class="parent-icon"><i class="fadeIn animated bx bx-plus-circle"> </i></div><div class="menu-title"> Добавить</div></a>
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
                        @foreach( $tags as $tag)
                            <tr>
                                <td>{{ $tag->id }}</td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                                        <div class="">
                                            <p class="mb-0">{{ $tag->title }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="{{ route('admin.tag.show', $tag->id )}}" class="text-primary"><i class="bi bi-eye-fill"></i></a>
                                        <a href="{{ route('admin.tag.edit', $tag->id )}}" class="text-warning"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="#" data-title="{{ $tag->title }}" data-id="{{ route('admin.tag.delete', $tag->id) }}" class="text-danger delete_link" ><i class="bi bi-trash-fill"></i></a>
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
    @include('admin.includes.modal_delete')
@endsection
