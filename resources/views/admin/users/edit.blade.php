@extends('admin.layouts.main')
@section('title', 'Редактирование пользователя')
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
                            <form action="{{ route('admin.user.update', $user->id) }}" method="POST" class="row g-3">
                                @csrf
                                @method('PATCH')
                                <div class="col-12">
                                    @foreach ($errors->all() as $error)
                                        <div
                                            class="alert border-0 border-danger border-start border-4 bg-light-danger alert-dismissible fade show">
                                            <div class="text-danger">{{ $error }}</div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                        </div>
                                    @endforeach
                                        <div class="mb-3">
                                            <label class="form-label">Имя пользователя</label>
                                            <input type="text" class="form-control" name="name" placeholder="Имя пользователя" value="{{ $user->name }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">E-mail</label>
                                            <input type="email" class="form-control" name="email" placeholder="E-mail адрес" value="{{ $user->email }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Пароль</label>
                                            <input type="password" class="form-control" name="password" placeholder="Пароль" value="{{ old('password') }}">
                                        </div>

                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Обновить</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
