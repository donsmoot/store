@extends('admin.layouts.main')
@section('title', 'Категории')
@section('content')
    <main class="page-content">
        @include('admin.includes.breadcrumb')

        <div class="card col-6">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0"></h5>

                </div>
                <?php $error = Session::get('error'); ?>
                Ошибка {{ $error }}
            </div>
        </div>
    </main>

@endsection
