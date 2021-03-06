@extends('layouts.master')

@section('title', 'Заметки')

@section('content')

<div class="container">
    <h2 class="text-center mt-2">Заметки</h2>
    <br>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>

    @if($db->count() == 0 && !session()->has('danger'))
    <div class="alert alert-primary d-flex justify-content-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
            <use xlink:href="#info-fill" /></svg>
        <div>
            Произошел прикол оказывается нету не одной заметки, скорее добавьте новую
        </div>
    </div>
    @endif

    @if(session()->has('danger'))
    <div class="alert alert-danger d-flex justify-content-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
            <use xlink:href="#exclamation-triangle-fill" /></svg>
        <div>
            Запись была удалена
        </div>
    </div>
    @endif

    @if(session()->has('success'))
    <div class="alert alert-success d-flex justify-content-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" /></svg>
        <div>
            Запись была добавленна
        </div>
    </div>
    @endif

</div>
<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($db as $note)
        @include('apps.notes.card')
        @endforeach
    </div>
    <br>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Добавить заметку</button>
            </div>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasRightLabel">Добавить заметку</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('apps-note-add') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="header" class="form-label">Заголовок заметки</label>
                            <input type="text" placeholder="Ваш заголовок" class="form-control" name="header" id="header" aria-describedby="header">
                        </div>
                        <label for="text" class="form-label">Основной текст</label>
                        <textarea class="form-control" name="main" id="main" placeholder="Ваш текст"></textarea> <br>
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>

</div>



@endsection
