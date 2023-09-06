@extends('admin.layouts.main')
@section('title', 'Создать Пост')
@section('content')
    <main class="page-content">
        @include('admin.includes.breadcrumb')
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <h6 class="mb-0 text-uppercase">@yield('title')</h6>
                            <hr>
                            <form action="{{ route('admin.post.store') }}" method="POST" class="row g-3"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="col-12">
                                    @if ($errors->has('title'))
                                        <div
                                            class="alert border-0 border-danger border-start border-4 bg-light-danger alert-dismissible fade show">
                                            <div class="text-danger">{{ $errors->first('title') }}</div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <label class="form-label">Название</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="title"
                                               placeholder="Название поста" value="{{ old('title') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Контент</label>
                                        <textarea id="summernote" name="content">{{ old('content') }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Загрузить изображение превью:</label>
                                        <input type="file" class="form-control" name="preview_image">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Загрузить изображение:</label>
                                        <input type="file" class="form-control" name="main_image">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Категории:</label>
                                        <select class="form-select" aria-label="Default select example"
                                                name="category_id">
                                            <option selected>Выберите категорию</option>
                                            @foreach($categories as $category)
                                                <option
                                                    value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : ''}}>{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <div class="mb-3" data-select2-id="21">
                                            <label class="form-label">Теги</label>
                                            <select class="multiple-select"  name="tag_ids[]" data-placeholder="Choose anything"
                                                    multiple="multiple">
                                                @foreach($tags as $tag)
                                                    <option {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? 'selected' : '' }} value="{{ $tag->id }}">{{$tag->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Сохранить</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>

    </script>
@endsection
