@extends('layouts.master')

@section('title', 'Ссылки')

@section('content')

<div class="container-fluid">
    <div class="row" style="margin-top: 10px; ">
        <div class="col-8">
            <h3 class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                    <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"></path>
                    <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"></path>
                </svg>Ссылки</h3>
            <div class="list-group">
                <a target="_blank" href="https://vk.com/id512131497" class="list-group-item list-group-item-action" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Мой ВК</h5>
                        <small>Перейти </small>
                    </div>
                    <img class="rounded-circle" height="50em" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/VK.com-logo.svg/2048px-VK.com-logo.svg.png" alt="">
                </a>
                <a target="_blank" href="https://t.me/Endwhile" class="list-group-item list-group-item-action" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Мой Телеграм</h5>
                        <small>Перейти </small>
                    </div>
                    <img class="rounded-circle" height="50em" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Telegram_logo.svg/2048px-Telegram_logo.svg.png" alt="">
                </a>
                <a target="_blank" href="https://open.spotify.com/user/o9w1f70zftyidpqhahphvu62k" class="list-group-item list-group-item-action" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Мой Spotify</h5>
                        <small>Перейти </small>
                    </div>
                    <img class="rounded-circle" height="50em" width="50em" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="">
                </a>
                <a target="_blank" href="https://github.com/M8eight" class="list-group-item list-group-item-action" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Мой GitHub</h5>
                        <small>Перейти </small>
                    </div>
                    <img class="rounded-circle" height="50em" width="50em" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Octicons-mark-github.svg/2048px-Octicons-mark-github.svg.png" alt="">
                </a>
            </div>

        </div>
        <div class="col-4">
            <h1>Можно нажимать на изображения<br> <img class="displayed" src="https://i.gifer.com/origin/ac/acc93a99de65bc9a3a153068a995c732_w200.gif"> </h1>
            <br>
            <h3>Все ссылки открываются в новой вкладке </h3>
        </div>
    </div>
</div>

@endsection
